let isOpened = false;
let isAnimating = false;
let cur = 0;

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

function goTo(index) {
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

  const enterTransform = isNext ? "translateY(100%)" : "translateY(-100%)";
  const exitTransform = isNext ? "translateY(-100%)" : "translateY(100%)";

  toEl.style.transition = "none";
  toEl.style.transform = enterTransform;
  toEl.style.opacity = "0";
  toEl.style.pointerEvents = "none";

  toEl.getBoundingClientRect();

  const transition =
    "transform 0.8s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.4s";

  fromEl.style.transition = transition;
  fromEl.style.transform = exitTransform;
  fromEl.style.opacity = "0";
  fromEl.style.pointerEvents = "none";

  toEl.style.transition = transition;
  toEl.style.transform = "translateY(0%)";
  toEl.style.opacity = "1";
  toEl.style.pointerEvents = "auto";

  toEl.classList.add("active");
  initScrollAnimations(toEl);
  updateViewportBg(toEl);
  updateViewportBackground(toEl);
  scaleCanvas(toEl);

  let finished = false;

  const finishTransition = () => {
    if (finished) return;
    finished = true;

    fromEl.classList.remove("active");
    restartAnimations(toEl);

    isAnimating = false;
    resetIdleTimer();
  };

  fromEl.addEventListener("transitionend", finishTransition, {
    once: true,
  });

  setTimeout(finishTransition, 850);

  cur = index;
}

function canScrollInside(section, dy) {
  if (!section) return false;

  const scrollEl = section.querySelector(".section-scroll");

  if (!scrollEl) return false;

  const maxScrollTop = scrollEl.scrollHeight - scrollEl.clientHeight;

  if (maxScrollTop <= 0) return false;

  if (dy < 0) {
    return scrollEl.scrollTop < maxScrollTop - 2;
  }

  if (dy > 0) {
    return scrollEl.scrollTop > 2;
  }

  return false;
}

function handleSwipe(dy) {
  if (!isOpened || isAnimating) return;

  resetIdleTimer();

  const activeSection = document.getElementById(sectionOrder[cur]);

  if (canScrollInside(activeSection, dy)) {
    return;
  }

  if (dy < -40) goTo(cur + 1);
  else if (dy > 40) goTo(cur - 1);
}

function initFirstSection() {
  const first = document.getElementById(sectionOrder[0]);
  if (!first) return;

  first.style.transform = "translateY(0%)";
  first.style.opacity = "1";
  first.style.pointerEvents = "auto";
  first.classList.add("active");

  updateViewportBg(first);
  updateViewportBackground(first);
  restartAnimations(first);
  scaleCanvas(first);
}

function initGestures(app) {
  app.addEventListener(
    "touchstart",
    (e) => {
      resetIdleTimer();

      startY = e.touches[0].clientY;
    },
    { passive: true },
  );

  app.addEventListener(
    "touchend",
    (e) => {
      const endY = e.changedTouches[0].clientY;

      handleSwipe(endY - startY);
    },
    { passive: true },
  );

  app.addEventListener("mousedown", (e) => {
    resetIdleTimer();

    startY = e.clientY;
  });

  app.addEventListener("mouseup", (e) => {
    handleSwipe(e.clientY - startY);
  });
}

function initScrollAnimations(section) {
  if (!section || section.dataset.scrollReady === "true") return;

  const scrollSection = section.querySelector(".section-scroll");
  if (!scrollSection) return;

  const items = scrollSection.querySelectorAll('[class*="scroll-"]');

  items.forEach((item) => {
    const threshold = parseFloat(item.dataset.threshold || "0.2");

    const observer = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach((entry) => {
          if (!entry.isIntersecting) return;

          entry.target.classList.add("is-visible");
          observer.unobserve(entry.target);
        });
      },
      {
        root: scrollSection,
        threshold,
      },
    );

    observer.observe(item);
  });

  section.dataset.scrollReady = "true";
}

document.addEventListener("DOMContentLoaded", () => {
  const app = document.getElementById("app");

  if (!app || sectionOrder.length === 0) return;

  swipeHints = Array.from(document.querySelectorAll(".swipe-hint"));

  initFirstSection();
  initGestures(app);

  initScrollAnimations(document.getElementById(sectionOrder[0]));

  requestAnimationFrame(() => {
    app.classList.add("is-ready");
  });
});

function openInvitation() {
  const btn = document.getElementById("openInvitationBtn");

  if (btn) btn.classList.add("hidden");

  isOpened = true;

  if (cur < sectionOrder.length - 1) {
    goTo(cur + 1);
  }

  resetIdleTimer();
}

window.addEventListener("beforeunload", () => {
  clearTimeout(idleTimer);
});
