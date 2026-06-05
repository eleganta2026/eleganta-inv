function scaleCanvas() {
  const canvas = document.getElementById("app");

  if (!canvas) return;

  const baseWidth = 414;
  const baseHeight = 736;

  const screenWidth = window.innerWidth;
  const screenHeight = window.innerHeight;

  const scaleX = screenWidth / baseWidth;
  const scaleY = screenHeight / baseHeight;

  let scale;

  if (screenWidth <= 320) {
    scale = Math.min(scaleX, scaleY);
  } else if (screenWidth <= 480) {
    // scale = Math.min(scaleX, scaleY);
    scale = Math.max(scaleX, scaleY);
  } else {
    scale = scaleY;
  }

  canvas.style.position = "absolute";
  canvas.style.left = "50%";
  canvas.style.top = "50%";
  canvas.style.transform = `translate(-50%, -50%) scale(${scale})`;

  console.log({
    width: window.innerWidth,
    height: window.innerHeight,
    scaleX,
    scaleY,
    ratio: window.innerHeight / window.innerWidth,
  });
}

document.addEventListener("DOMContentLoaded", scaleCanvas);
window.addEventListener("load", scaleCanvas);
window.addEventListener("resize", scaleCanvas);
window.addEventListener("orientationchange", scaleCanvas);
