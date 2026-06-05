document.querySelectorAll("[data-countdown]").forEach((countdown) => {
  const targetDate = new Date(
    countdown.dataset.date.replace(" ", "T"),
  ).getTime();

  const daysEl = countdown.querySelector("[data-days]");
  const hoursEl = countdown.querySelector("[data-hours]");
  const minutesEl = countdown.querySelector("[data-minutes]");
  const secondsEl = countdown.querySelector("[data-seconds]");

  if (!daysEl || !hoursEl || !minutesEl || !secondsEl) return;

  function pad(number) {
    return String(number).padStart(2, "0");
  }

  function updateCountdown() {
    const distance = targetDate - Date.now();

    if (distance <= 0) {
      daysEl.textContent = "00";
      hoursEl.textContent = "00";
      minutesEl.textContent = "00";
      secondsEl.textContent = "00";
      return;
    }

    daysEl.textContent = pad(Math.floor(distance / (1000 * 60 * 60 * 24)));
    hoursEl.textContent = pad(Math.floor((distance / (1000 * 60 * 60)) % 24));
    minutesEl.textContent = pad(Math.floor((distance / (1000 * 60)) % 60));
    secondsEl.textContent = pad(Math.floor((distance / 1000) % 60));
  }

  updateCountdown();

  const timer = setInterval(() => {
    updateCountdown();

    if (targetDate - Date.now() <= 0) {
      clearInterval(timer);
    }
  }, 1000);
});
