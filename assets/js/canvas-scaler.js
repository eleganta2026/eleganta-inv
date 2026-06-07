function scaleCanvas(currentSection = null) {
  const canvas = document.getElementById("app");
  if (!canvas) return;

  const baseWidth = 414;
  const baseHeight = 736;

  const screenWidth = window.innerWidth;
  const screenHeight = window.innerHeight;

  const scaleX = screenWidth / baseWidth;
  const scaleY = screenHeight / baseHeight;

  const activeSection =
    currentSection instanceof Element
      ? currentSection
      : document.querySelector(".page-section.active");

  const activeScrollSection = activeSection?.querySelector(".section-scroll");

  let scale;

  const isScrollSection =
    screenWidth > 320 && screenWidth <= 480 && activeScrollSection;

  // Tentukan skala canvas berdasarkan ukuran layar
  if (screenWidth <= 320) {
    // Layar sangat kecil:
    // pastikan seluruh canvas tetap terlihat
    scale = Math.min(scaleX, scaleY);
  } else if (screenWidth <= 480) {
    if (isScrollSection) {
      document.body.classList.remove("allow-overflow");
      canvas.style.overflow = "hidden";
      // Section scroll
      scale = scaleX;
    } else {
      // Section swipe
      // scale = Math.min(scaleX, scaleY);
      const ratio = screenHeight / screenWidth;

      if (ratio >= 1.8) {
        document.body.classList.add("allow-overflow");

        canvas.style.overflow = "visible";
        scale = Math.min(scaleX, scaleY);
      } else {
        document.body.classList.remove("allow-overflow");

        canvas.style.overflow = "hidden";
        scale = Math.max(scaleX, scaleY);
      }
    }
  } else {
    // Tablet dan desktop:
    // prioritaskan tinggi layar
    document.body.classList.remove("allow-overflow");
    canvas.style.overflow = "hidden";
    scale = scaleY;
  }

  document.documentElement.style.setProperty("--canvas-scale", scale);

  document.body.classList.toggle("is-scroll-section", !!isScrollSection);

  canvas.style.position = "absolute";
  canvas.style.left = "50%";

  if (isScrollSection) {
    // Section memiliki konten yang bisa discroll.
    // Tinggi canvas boleh bertambah agar
    // elemen di bagian bawah tidak terpotong.

    const visibleCanvasHeight = screenHeight / scale;

    canvas.style.width = `${baseWidth}px`;
    canvas.style.height = `${Math.max(baseHeight, visibleCanvasHeight)}px`;

    // Tempel canvas ke bagian atas layar
    canvas.style.top = "0";
    canvas.style.transform = `translateX(-50%) scale(${scale})`;
    canvas.style.transformOrigin = "top center";
  } else {
    // Section swipe dianggap sebagai
    // satu layar penuh dengan tinggi tetap.

    canvas.style.width = `${baseWidth}px`;
    canvas.style.height = `${baseHeight}px`;

    // Selalu posisikan canvas di tengah layar
    canvas.style.top = "50%";
    canvas.style.transform = `translate(-50%, -50%) scale(${scale})`;
    canvas.style.transformOrigin = "center center";
  }

  console.log({
    width: screenWidth,
    height: screenHeight,
    scaleX,
    scaleY,
    ratio: screenHeight / screenWidth,
    hasScrollSection: !!activeScrollSection,
    isScrollSection,
  });
}

document.addEventListener("DOMContentLoaded", scaleCanvas);
window.addEventListener("load", scaleCanvas);
window.addEventListener("resize", scaleCanvas);
window.addEventListener("orientationchange", scaleCanvas);
