let countdownNumberStarted = false;

function startCountdownNumberAnimation() {
  if (countdownNumberStarted) return;

  const section = document.getElementById("countdown");

  if (!section || !section.classList.contains("active")) return;

  countdownNumberStarted = true;

  document.querySelectorAll("[data-countdown]").forEach((countdown) => {
    const targetDate = new Date(
      countdown.dataset.date.replace(" ", "T"),
    ).getTime();

    const daysEl = countdown.querySelector("[data-days]");
    const hoursEl = countdown.querySelector("[data-hours]");
    const minutesEl = countdown.querySelector("[data-minutes]");
    const secondsEl = countdown.querySelector("[data-seconds]");

    if (!daysEl || !hoursEl || !minutesEl || !secondsEl) return;

    const animationDuration = 4000;

    function pad(number) {
      return String(number).padStart(2, "0");
    }

    function getCountdownValues() {
      const distance = targetDate - Date.now();

      if (distance <= 0) {
        return {
          days: 0,
          hours: 0,
          minutes: 0,
          seconds: 0,
        };
      }

      return {
        days: Math.floor(distance / (1000 * 60 * 60 * 24)),
        hours: Math.floor((distance / (1000 * 60 * 60)) % 24),
        minutes: Math.floor((distance / (1000 * 60)) % 60),
        seconds: Math.floor((distance / 1000) % 60),
      };
    }

    function animateNumber(el, from, to, duration) {
      const startTime = performance.now();

      function run(currentTime) {
        const progress = Math.min((currentTime - startTime) / duration, 1);
        const value = Math.floor(from + (to - from) * progress);

        el.textContent = pad(value);

        if (progress < 1) {
          requestAnimationFrame(run);
        }
      }

      requestAnimationFrame(run);
    }

    function updateCountdown() {
      const values = getCountdownValues();

      daysEl.textContent = pad(values.days);
      hoursEl.textContent = pad(values.hours);
      minutesEl.textContent = pad(values.minutes);
      secondsEl.textContent = pad(values.seconds);
    }

    const values = getCountdownValues();

    animateNumber(daysEl, 99, values.days, animationDuration);
    animateNumber(hoursEl, 99, values.hours, animationDuration);
    animateNumber(minutesEl, 99, values.minutes, animationDuration);
    animateNumber(secondsEl, 99, values.seconds, animationDuration);

    setTimeout(() => {
      updateCountdown();

      const timer = setInterval(() => {
        updateCountdown();

        if (targetDate - Date.now() <= 0) {
          clearInterval(timer);
        }
      }, 1000);
    }, animationDuration + 100);
  });
}

const countdownNumberWatcher = setInterval(() => {
  startCountdownNumberAnimation();

  if (countdownNumberStarted) {
    clearInterval(countdownNumberWatcher);
  }
}, 200);
