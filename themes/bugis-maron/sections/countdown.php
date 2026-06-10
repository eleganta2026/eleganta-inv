<?php
$weddingDate = '2026-07-22 11:00:00';

$weddingTimestamp = strtotime($weddingDate);

$year = date('Y', $weddingTimestamp);
$month = date('n', $weddingTimestamp);
$weddingDay = date('j', $weddingTimestamp);

$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
$firstDay = date('N', strtotime("$year-$month-01"));

$weekdays = ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'];
?>

<section
    id="countdown"
    data-bg="#6D1212"
    class="page-section relative h-full w-full text-center bg-[#6D1212]">

    <div class="absolute z-20 -top-[124px] left-[171px] animate-ornament-from-top-right">
        <img
            src="<?= theme_asset($theme, 'img/bunga-atas.webp') ?>"
            class="w-[464px] max-w-none animate-sway-top-right"
            alt="bunga atas" />
    </div>

    <img
        src="<?= theme_asset($theme, 'img/bg-bawah.webp') ?>"
        class="absolute z-0 top-[637px] -left-[21px] w-[485px] max-w-none"
        alt="bg bawah" />

    <div class="absolute z-20 top-[345px] -left-[229px] animate-ornament-from-bottom-left">
        <div class="animate-ornament-zoom-in-umbrella ">
            <img
                src="<?= theme_asset($theme, 'img/ornamen-payung-besar.webp') ?>"
                class="w-[546px] max-w-none animate-pulse-umbrella"
                alt="ornamen payung besar" />
        </div>
    </div>

    <div class="absolute z-20 top-[345px] left-[154px] animate-ornament-from-bottom-right">
        <div class="animate-ornament-zoom-in-umbrella">
            <img
                src="<?= theme_asset($theme, 'img/ornamen-payung-besar.webp') ?>"
                class="w-[546px] max-w-none animate-pulse-umbrella"
                alt="ornamen payung besar" />
        </div>
    </div>

    <div class="absolute top-[69px] left-0 z-10 w-[387px] h-[594px] bg-[#FFE9C7] rounded-r-[65px]">
        <p class="font-imperial text-[48px] text-[#6D1212] text-left leading-[45px] tracking-[1.44px] ml-[23px] mt-[34px] animate-text-from-left">
            Our Special day
        </p>

        <div class="w-full border-t-1 border-[#6D1212] absolute top-[87px] animate-text-from-left"></div>

        <div
            data-countdown
            data-date="<?= $weddingDate ?>"
            class="relative z-10 flex items-center justify-center gap-x-8 text-[#6D1212] font-inria leading-none mt-8">

            <div class="text-center animate-text-from-left">
                <p data-days class="text-[48px] font-bold">00</p>
                <p class="text-[16px] font-light">Days</p>
            </div>

            <div class="text-center animate-text-from-left">
                <p data-hours class="text-[48px] font-bold">00</p>
                <p class="text-[16px] font-light">Hours</p>
            </div>

            <div class="text-center animate-text-from-right">
                <p data-minutes class="text-[48px] font-bold">00</p>
                <p class="text-[16px] font-light">Minutes</p>
            </div>

            <div class="text-center animate-text-from-right">
                <p data-seconds class="text-[48px] font-bold">00</p>
                <p class="text-[16px] font-light">Seconds</p>
            </div>
        </div>

        <div class="relative z-10 mt-8 px-4 text-[#6D1212] font-inria animate-text-from-bottom">
            <div
                id="wedding-date-marker"
                class="absolute z-0 hidden h-8 w-8 rounded-full bg-[#6D1212] transition-all duration-300 ease-out pointer-events-none">

                <svg
                    class="absolute -top-2 -right-2 h-4 w-4 text-[#6D1212]"
                    fill="currentColor"
                    viewBox="0 0 20 20">
                    <path d="M10 17s-6-4.35-8.5-7.5C-1 5.5 1.5 1 5.5 1c2.1 0 3.4 1.3 4.5 2.7C11.1 2.3 12.4 1 14.5 1 18.5 1 21 5.5 18.5 9.5 16 12.65 10 17 10 17z" />
                </svg>
            </div>

            <div class="grid grid-cols-7 text-center text-[10px] font-bold">
                <?php foreach ($weekdays as $index => $day): ?>
                    <div class="<?= $index === 5 ? 'text-[#2A2ABF]' : ($index === 6 ? 'text-[#B00000]' : '') ?>">
                        <?= $day ?>
                    </div>
                <?php endforeach; ?>
            </div>

            <div id="calendar-grid" class="mt-1 grid grid-cols-7 gap-y-3 text-center">
                <?php for ($i = 1; $i < $firstDay; $i++): ?>
                    <div></div>
                <?php endfor; ?>

                <?php for ($date = 1; $date <= $daysInMonth; $date++): ?>
                    <?php
                    $dayOfWeek = date('N', strtotime("$year-$month-$date"));

                    $color = 'text-[#6D1212]';

                    if ($dayOfWeek == 6) {
                        $color = 'text-[#2A2ABF]';
                    }

                    if ($dayOfWeek == 7) {
                        $color = 'text-[#B00000]';
                    }

                    $isWeddingDate = $date == $weddingDay;
                    ?>

                    <div
                        class="relative flex items-center justify-center"
                        data-calendar-day="<?= $date ?>"
                        <?= $isWeddingDate ? 'data-wedding-day' : '' ?>>

                        <p class="relative z-10 text-[16px] font-bold leading-none <?= $color ?>">
                            <?= $date ?>
                        </p>
                    </div>
                <?php endfor; ?>
            </div>
        </div>

        <script>
            let weddingDateMarkerStarted = false;

            function animateWeddingDateMarker() {
                const grid = document.getElementById("calendar-grid");
                const marker = document.getElementById("wedding-date-marker");
                const days = [...document.querySelectorAll("[data-calendar-day]")];
                const weddingDay = document.querySelector("[data-wedding-day]");

                if (!grid || !marker || !days.length || !weddingDay) return;

                let activeDay = null;

                function moveTo(dayEl) {
                    if (activeDay) {
                        activeDay.querySelector("p").classList.remove("!text-white");
                    }

                    marker.style.left = dayEl.offsetLeft + dayEl.offsetWidth / 2 - 16 + "px";
                    marker.style.top = dayEl.offsetTop + dayEl.offsetHeight / 2 - 16 + "px";

                    marker.classList.remove("hidden");
                    dayEl.querySelector("p").classList.add("!text-white");

                    activeDay = dayEl;
                }

                const weddingDate = parseInt(weddingDay.dataset.calendarDay, 10);

                const startDate =
                    weddingDate - 10 > 0 ? weddingDate - 10 : weddingDate + 10;

                const maxDate = Math.max(
                    ...days.map((day) => parseInt(day.dataset.calendarDay, 10))
                );

                const overshootDate = Math.min(weddingDate + 3, maxDate);

                let currentDate = startDate;
                let isReturning = false;

                const interval = setInterval(() => {
                    const currentDay = days.find((day) => {
                        return parseInt(day.dataset.calendarDay, 10) === currentDate;
                    });

                    if (currentDay) {
                        moveTo(currentDay);
                    }

                    if (!isReturning) {
                        if (currentDate >= overshootDate) {
                            isReturning = true;
                        } else {
                            currentDate++;
                        }
                    } else {
                        if (currentDate <= weddingDate) {
                            clearInterval(interval);
                            moveTo(weddingDay);
                            return;
                        }

                        currentDate--;
                    }
                }, 350);
            }

            function startCountdownSectionAnimation() {
                const section = document.getElementById("countdown");

                if (!section || weddingDateMarkerStarted) return;

                if (section.classList.contains("active")) {
                    weddingDateMarkerStarted = true;
                    setTimeout(animateWeddingDateMarker, 1000);
                }
            }

            const countdownSectionWatcher = setInterval(() => {
                startCountdownSectionAnimation();

                if (weddingDateMarkerStarted) {
                    clearInterval(countdownSectionWatcher);
                }
            }, 200);
        </script>

        <div class="relative z-10 flex items-center justify-center gap-x-8 text-[#6D1212] font-inria leading-none mt-4 animate-text-from-bottom">
            <?php
            $title = urlencode('Pernikahan Fadlullah & Pasangan');
            $start = '20260721T100000';
            $end = '20260721T120000';
            $location = urlencode('Gedung XYZ');
            $details = urlencode('Undangan Pernikahan Digital Eleganta');

            $link = "https://calendar.google.com/calendar/render?action=TEMPLATE&text={$title}&dates={$start}/{$end}&location={$location}&details={$details}";
            ?>
            <a
                href="<?= $link ?>"
                target="_blank"
                class="animate-pulse-button rounded-[15px] border-2 px-16 py-3 font-bold text-[24px] hover:cursor-pointer">
                Save to Calendar
            </a>
        </div>

        <img
            src="<?= theme_asset($theme, 'img/countdown/bg-kertas.webp') ?>"
            class="absolute z-0 bottom-0 left-0 w-[388px]"
            alt="bunga atas" />
    </div>
</section>