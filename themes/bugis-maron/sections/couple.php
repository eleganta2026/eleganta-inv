<section
    id="couple"
    class="page-section relative h-full w-full text-center">
    <div class="section-scroll">

        <img
            src="<?= theme_asset($theme, 'img/couple/bg.webp') ?>"
            class="absolute top-0 -left-[45px] z-0 w-[504px] max-w-none"
            alt="bg" />

        <img
            src="<?= theme_asset($theme, 'img/couple/ornamen-abstrak.webp') ?>"
            class="absolute -top-[36px] -left-[45px] z-0 h-[105px] max-w-none scroll-ornament-from-top"
            alt="ornamen abstrak" />

        <div class="absolute top-[500px] -left-[20px] z-20 w-[177px] scroll-ornament-from-bottom-left">
            <img
                src="<?= theme_asset($theme, 'img/couple/bunga-kiri-sedang.webp') ?>"
                class="animate-sway-bottom-left"
                alt="bunga kiri sedang" />
        </div>

        <div class="absolute top-[44px] -left-[30px] z-20 w-[196px] scroll-ornament-from-bottom-left">
            <img
                src="<?= theme_asset($theme, 'img/couple/bunga-kiri-kecil.webp') ?>"
                class="animate-sway-bottom-left"
                alt="bunga kiri kecil" />
        </div>

        <div class="absolute top-[415px] left-[226px] z-20 w-[237px] scroll-ornament-from-bottom-right">
            <img
                src="<?= theme_asset($theme, 'img/couple/bunga-kanan-kecil.webp') ?>"
                class="animate-sway-bottom-right"
                alt="bunga kanan kecil" />
        </div>

        <div
            data-threshold="0.3"
            style="--delay: 0s;"
            class="absolute top-[772px] left-[183px] z-20 w-[323px] scroll-ornament-from-bottom-right">
            <img
                src="<?= theme_asset($theme, 'img/couple/bunga-kanan-besar.webp') ?>"
                class="animate-sway-bottom-right"
                alt="bunga kanan besar" />
        </div>

        <div class="absolute top-[88px] left-1/2 z-10 w-[360px] h-[930px] -translate-x-1/2 bg-[#F6C99F] text-[#6D1212] rounded-[33px] outline outline-7 outline-[#660000]">
            <p class="font-kolker text-[64px] leading-none tracking-[2px] mt-12 text-right pr-4 scroll-text-from-top">
                Bride & Groom
            </p>

            <div class="border-1 w-[320px] absolute right-0 -mt-2 scroll-text-from-top"></div>

            <div class="flex justify-start mt-[48px] gap-5">
                <div class="w-[155px] h-[215] shrink-0 outline outline-7 outline-[#660000] p-1.5 scroll-text-from-left">
                    <img
                        src="<?= inv_asset('img/iqbal.jpeg') ?>"
                        class="w-full h-full object-cover"
                        alt="Foto Groom" />
                </div>

                <div class="text-left -mt-3 scroll-text-from-right">
                    <p class="font-kaisei font-bold text-[24px] leading-[27px]">
                        Muhammad
                        Iqbal
                        Iskandar,
                        S.Kom
                    </p>

                    <p class="font-inria text-[16px] mt-3">
                        Putra bungsu dari Bapak Alm. Iskandar, S.Pd dan ibu Almh. Hj. Mukarramah Farid
                    </p>
                </div>
            </div>

            <div class="flex justify-end mt-[170px] gap-5">
                <div
                    data-threshold="0.5"
                    style="--delay: 0s;"
                    class="text-right -mt-3 scroll-text-from-left">
                    <p
                        class="font-kaisei font-bold text-[24px] leading-[27px]">
                        Nurul Muwaffiqah
                        Ridwan, S.Pd
                    </p>

                    <p class="font-inria text-[16px] mt-3">
                        Putri sulung dari Bapak Muhammad Ridwan AR, S.Ag., M.Pd.I. dan ibu Surniati Ilyas, S.Ag., M.Pd.
                    </p>
                </div>

                <div
                    data-threshold="0.5"
                    style="--delay: 0s;"
                    class="w-[155px] h-[215] shrink-0 outline outline-7 outline-[#660000] p-1.5 scroll-text-from-right">
                    <img
                        src="<?= inv_asset('img/fika.jpeg') ?>"
                        class="w-full h-full object-cover"
                        alt="Foto Groom" />
                </div>
            </div>
        </div>
    </div>
</section>