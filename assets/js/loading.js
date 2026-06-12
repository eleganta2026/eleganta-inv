const loadingScreen = document.getElementById("loadingScreen");
const invitationApp = document.getElementById("invitationApp");

function getCriticalImages() {
  const sections = document.querySelectorAll("#cover, #hero");
  const images = new Set();

  sections.forEach((section) => {
    section.querySelectorAll("img").forEach((img) => {
      const src = img.currentSrc || img.src;

      if (src) {
        images.add(src);
      }
    });

    const dataBgElements = [
      section,
      ...section.querySelectorAll("[data-viewport-bg]"),
    ];

    dataBgElements.forEach((el) => {
      const bg = el.dataset.viewportBg;

      if (bg) {
        images.add(bg);
      }
    });

    const elements = [section, ...section.querySelectorAll("*")];

    elements.forEach((el) => {
      const bg = window.getComputedStyle(el).backgroundImage;

      if (!bg || bg === "none") return;

      const matches = bg.match(/url\(["']?(.+?)["']?\)/g);

      if (!matches) return;

      matches.forEach((match) => {
        const url = match.replace(/^url\(["']?/, "").replace(/["']?\)$/, "");

        if (url) {
          images.add(url);
        }
      });
    });
  });

  return [...images];
}

function preloadImage(src) {
  return new Promise((resolve) => {
    const img = new Image();

    img.onload = resolve;
    img.onerror = resolve;
    img.src = src;

    if (img.complete) {
      resolve();
    }
  });
}

function wait(ms) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}

async function showInvitationWhenReady() {
  const criticalImages = getCriticalImages();

  await Promise.race([
    Promise.all(criticalImages.map(preloadImage)),
    wait(8000),
  ]);

  invitationApp.classList.remove("opacity-0", "pointer-events-none");
  invitationApp.classList.add("opacity-100");

  loadingScreen.classList.add("opacity-0", "pointer-events-none");

  setTimeout(() => {
    loadingScreen.remove();
  }, 700);
}

showInvitationWhenReady();

const loadingTyping = document.getElementById("loadingTyping");

const loadingTexts = [
  "Sebentar ya...",
  "Menyusun momen indah...",
  "Menyiapkan undangan...",
];

let textIndex = 0;
let charIndex = 0;
let isDeleting = false;

function typeLoadingText() {
  if (!loadingTyping || !document.body.contains(loadingTyping)) return;

  const currentText = loadingTexts[textIndex];

  if (isDeleting) {
    loadingTyping.textContent = currentText.slice(0, charIndex - 1);
    charIndex--;
  } else {
    loadingTyping.textContent = currentText.slice(0, charIndex + 1);
    charIndex++;
  }

  let speed = isDeleting ? 50 : 100;

  if (!isDeleting && charIndex === currentText.length) {
    speed = 2000;
    isDeleting = true;
  }

  if (isDeleting && charIndex === 0) {
    isDeleting = false;
    textIndex = (textIndex + 1) % loadingTexts.length;
    speed = 500;
  }

  setTimeout(typeLoadingText, speed);
}

typeLoadingText();
