<section
    id="gift"
    data-bg="#6D1212"
    class="page-section relative h-full w-full text-center bg-[#6D1212]">

    <img
        src="<?= theme_asset($theme, 'img/bg-bawah.webp') ?>"
        class="absolute z-0 top-[637px] -left-[21px] w-[485px] max-w-none"
        alt="bg bawah" />

    <img
        src="<?= theme_asset($theme, 'img/ornamen-abstrak-atas.webp') ?>"
        class="absolute z-20 -top-[10px] -left-[10px] w-[445px] max-w-none animate-ornament-from-top"
        alt="ornamen abstrak atas" />

    <div class="absolute z-20 top-[390px] -left-[195px] animate-ornament-from-bottom-left">
        <img
            src="<?= theme_asset($theme, 'img/ornamen-payung-besar.webp') ?>"
            class="w-[546px] rotate-[20deg] max-w-none animate-pulse-umbrella"
            alt="ornamen payung besar" />
    </div>

    <div class="absolute z-20 top-[500px] left-[180px] animate-ornament-from-bottom-right">
        <img
            src="<?= theme_asset($theme, 'img/gift/kado.webp') ?>"
            class="w-[268px] max-w-none animate-pulse-umbrella"
            alt="kado" />
    </div>

    <div class="absolute top-[98px] left-1/2 -translate-x-1/2 z-10 w-[378px] h-[569px] bg-[#FFE9C7] rounded-t-[62px] overflow-hidden">
        <p class="font-kolker text-[48px] text-[#6D1212] mt-12 text-center animate-text-from-top">
            Wedding Gift
        </p>

        <div class="w-[333px] border-t-1 border-[#6D1212] absolute top-[112px] left-1/2 -translate-x-1/2 animate-text-from-top"></div>

        <div class="flex flex-col items-center justify-center gap-8 text-[#6D1212] font-inria leading-none mt-[28px] w-[300px] mx-auto animate-text-from-bottom">
            <p class="font-bold text-[15px] leading-5">
                Terima kasih telah menambah semangat kegembiraan pernikahan kami dengan kehadiran
                dan hadiah indah Anda.
            </p>

            <div class="animate-pulse-button">
                <div class="flex justify-between gap-10">
                    <button
                        id="btnCashless"
                        class="bg-[#6D1212] font-inria text-[13px] font-bold text-[#FFC8AA] w-[110px] py-2.5 rounded-[10px]">? Cashless</button>
                    <button
                        id="btnSendGift"
                        class="bg-[#6D1212] font-inria text-[13px] font-bold text-[#FFC8AA] w-[110px] py-2.5 rounded-[10px]">? Kirim Kado</button>
                </div>
            </div>

            <div id="cashless" class="hidden justify-between items-center gap-4">
                <div class="gap-3">
                    <p class="font-inria font-bold text-[20px] underline underline-offset-6">
                        1234567899876543
                    </p>

                    <p class="font-inria text-[14px] mt-2.5">
                        A/N Fadlullah Heri Farid
                        <br>
                        BCA
                    </p>

                    <button class="bg-[#6D1212] font-inria text-[12px] font-bold text-[#FFC8AA] px-2 py-2.5 rounded-[10px] mt-2 animate-pulse-button">Salin Rekening</button>
                </div>
            </div>

            <div id="sendgift" class="hidden flex-col gap-3">
                <p class="font-inria font-light text-[14px]">
                    Anda dapat mengirim Kado ke
                </p>

                <p class="font-inria font-bold text-[16px]">
                    Jl. Jend. Sudirman No.1 Kota Parepare
                </p>
            </div>
        </div>

        <script>
            btnCashless.addEventListener("click", () => {
                cashless.classList.remove("hidden");
                cashless.classList.add("flex");

                sendgift.classList.add("hidden");
                sendgift.classList.remove("flex");
            });

            btnSendGift.addEventListener("click", () => {
                sendgift.classList.remove("hidden");
                sendgift.classList.add("flex");

                cashless.classList.add("hidden");
                cashless.classList.remove("flex");
            });
        </script>

        <img
            src="<?= theme_asset($theme, 'img/countdown/bg-kertas.webp') ?>"
            class="absolute -z-10 bottom-0 h-full"
            alt="bg kertas" />
    </div>
</section>