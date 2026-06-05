let isOpened = false;
let isAnimating = false;
let cur = 0;

let startX = 0;
let startY = 0;

let swipeHints = [];
let idleTimer = null;

const sectionOrder = window.activeSections || [];

function showSwipeHints() {
  swipeHints.forEach((el) => {
    el.classList.remove("opacity-0");
    el.classList.add("opacity-100");
  });
}

function hideSwipeHints() {
  swipeHints.forEach((el) => {
    el.classList.remove("opacity-100");
    el.classList.add("opacity-0");
  });
}

function resetIdleTimer() {
  hideSwipeHints();
  clearTimeout(idleTimer);

  if (!isOpened) return;

  idleTimer = setTimeout(() => {
    if (isOpened && !isAnimating) {
      showSwipeHints();
    }
  }, 5000);
}

function restartAnimations(section) {
  if (!section) return;

  section.querySelectorAll('[style*="animation"]').forEach((el) => {
    const animation = el.style.animation;

    el.style.animation = "none";
    el.offsetHeight;
    el.style.animation = animation;
  });
}

function goTo(index, axis = "x") {
  if (
    index < 0 ||
    index >= sectionOrder.length ||
    index === cur ||
    isAnimating
  ) {
    return;
  }

  isAnimating = true;
  hideSwipeHints();
  clearTimeout(idleTimer);

  const isNext = index > cur;

  const fromEl = document.getElementById(sectionOrder[cur]);
  const toEl = document.getElementById(sectionOrder[index]);

  if (!fromEl || !toEl) {
    isAnimating = false;
    return;
  }

  const enterTransform =
    axis === "y"
      ? isNext
        ? "translateY(100%)"
        : "translateY(-100%)"
      : isNext
        ? "translateX(100%)"
        : "translateX(-100%)";

  const exitTransform =
    axis === "y"
      ? isNext
        ? "translateY(-100%)"
        : "translateY(100%)"
      : isNext
        ? "translateX(-100%)"
        : "translateX(100%)";

  toEl.style.transition = "none";
  toEl.style.transform = enterTransform;
  toEl.style.opacity = "0";
  toEl.style.pointerEvents = "none";

  toEl.getBoundingClientRect();

  const transition =
    "transform 0.45s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.45s";

  fromEl.style.transition = transition;
  fromEl.style.transform = exitTransform;
  fromEl.style.opacity = "0";
  fromEl.style.pointerEvents = "none";

  toEl.style.transition = transition;
  toEl.style.transform = axis === "y" ? "translateY(0%)" : "translateX(0%)";
  toEl.style.opacity = "1";
  toEl.style.pointerEvents = "auto";

  toEl.classList.add("active");
  restartAnimations(toEl);

  fromEl.addEventListener(
    "transitionend",
    () => {
      fromEl.classList.remove("active");
      isAnimating = false;
      resetIdleTimer();
    },
    { once: true },
  );

  cur = index;
}

function handleSwipe(dx, dy) {
  if (!isOpened || isAnimating) return;

  resetIdleTimer();

  const isHorizontal = Math.abs(dx) >= Math.abs(dy);

  if (isHorizontal) {
    if (dx < -40) goTo(cur + 1, "x");
    else if (dx > 40) goTo(cur - 1, "x");
  } else {
    if (dy < -40) goTo(cur + 1, "y");
    else if (dy > 40) goTo(cur - 1, "y");
  }
}

function initFirstSection() {
  const first = document.getElementById(sectionOrder[0]);
  if (!first) return;

  first.style.transform = "translateX(0%)";
  first.style.opacity = "1";
  first.style.pointerEvents = "auto";
  first.classList.add("active");

  restartAnimations(first);
}

function initGestures(app) {
  app.addEventListener(
    "touchstart",
    (e) => {
      resetIdleTimer();

      startX = e.touches[0].clientX;
      startY = e.touches[0].clientY;
    },
    { passive: true },
  );

  app.addEventListener(
    "touchend",
    (e) => {
      const endX = e.changedTouches[0].clientX;
      const endY = e.changedTouches[0].clientY;

      handleSwipe(endX - startX, endY - startY);
    },
    { passive: true },
  );

  app.addEventListener("mousedown", (e) => {
    resetIdleTimer();

    startX = e.clientX;
    startY = e.clientY;
  });

  app.addEventListener("mouseup", (e) => {
    handleSwipe(e.clientX - startX, e.clientY - startY);
  });
}

document.addEventListener("DOMContentLoaded", () => {
  const app = document.getElementById("app");

  if (!app || sectionOrder.length === 0) return;

  swipeHints = document.querySelectorAll(".swipe-hint");

  initFirstSection();
  initGestures(app);

  requestAnimationFrame(() => {
    app.classList.add("is-ready");
  });
});

function openInvitation() {
  const btn = document.getElementById("openInvitationBtn");

  if (btn) btn.classList.add("hidden");

  isOpened = true;

  if (cur < sectionOrder.length - 1) {
    goTo(cur + 1, "y");
  }

  resetIdleTimer();
}
