<section
    id="couple"
    data-bg="#6D1212"
    class="page-section relative h-full w-full text-center bg-[#6D1212]">
    <div class="section-scroll">

        <img
            src="<?= theme_asset($theme, 'img/couple/bg.webp') ?>"
            class="absolute top-0 -left-[45px] z-0 w-[504px] max-w-none"
            alt="bg" />

        <img
            src="<?= theme_asset($theme, 'img/couple/ornamen-abstrak.webp') ?>"
            class="absolute -top-[36px] -left-[45px] z-0 h-[105px] max-w-none scroll-ornament-from-top"
            alt="ornamen abstrak" />

        <div class="absolute top-[530px] -left-[20px] z-20 w-[190px] scroll-ornament-from-bottom-left">
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

        <div class="absolute top-[430px] left-[225px] z-20 w-[250px] scroll-ornament-from-top-right">
            <img
                src="<?= theme_asset($theme, 'img/couple/bunga-kanan-kecil.webp') ?>"
                class="animate-sway-bottom-right"
                alt="bunga kanan kecil" />
        </div>

        <div
            data-threshold="0.3"
            style="--delay: 0s;"
            class="absolute top-[820px] left-[180px] z-20 w-[323px] h-[290px] overflow-hidden scroll-ornament-from-top-right">
            <img
                src="<?= theme_asset($theme, 'img/couple/bunga-kanan-besar.webp') ?>"
                class="animate-sway-bottom-right w-[323px]"
                alt="bunga kanan besar" />
        </div>

        <div class="absolute top-[88px] left-1/2 z-10 w-[360px] h-[930px] -translate-x-1/2 bg-[#F6C99F] text-[#6D1212] rounded-[33px] outline outline-7 outline-[#660000]">
            <p class="font-kolker text-[64px] leading-none tracking-[2px] mt-12 text-right pr-4 scroll-text-from-top">
                Bride & Groom
            </p>

            <div class="border-1 w-[320px] absolute right-0 -mt-2 scroll-text-from-top"></div>

            <div class="flex justify-start mt-[48px] gap-5">
                <div class="shrink-0 scroll-text-from-left">
                    <div class="w-[155px] h-[215px] outline outline-7 outline-[#660000] p-1.5">
                        <img
                            src="<?= inv_asset('img/iqbal.jpeg') ?>"
                            class="w-full h-full object-cover"
                            alt="Foto Groom" />
                    </div>

                    <a
                        href="https://www.instagram.com/username"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="mt-4 mx-auto flex w-fit items-center justify-center gap-1 rounded-full bg-[#6D1212] px-4 py-2 text-[#FFE9C7] transition duration-300 hover:bg-[#5A0D0D] active:scale-95 animate-pulse-button">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="w-3.5 h-3.5">
                            <path d="M7.75 2h8.5A5.76 5.76 0 0 1 22 7.75v8.5A5.76 5.76 0 0 1 16.25 22h-8.5A5.76 5.76 0 0 1 2 16.25v-8.5A5.76 5.76 0 0 1 7.75 2Zm0 1.5A4.26 4.26 0 0 0 3.5 7.75v8.5a4.26 4.26 0 0 0 4.25 4.25h8.5a4.26 4.26 0 0 0 4.25-4.25v-8.5a4.26 4.26 0 0 0-4.25-4.25h-8.5ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 1.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm5.25-2a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5Z" />
                        </svg>

                        <span class="font-inria text-[13px] leading-none">
                            Instagram
                        </span>
                    </a>

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
                    class="shrink-0 scroll-text-from-right">
                    <div class="w-[155px] h-[215px] outline outline-7 outline-[#660000] p-1.5">
                        <img
                            src="<?= inv_asset('img/fika.jpeg') ?>"
                            class="w-full h-full object-cover"
                            alt="Foto Groom" />
                    </div>

                    <a
                        href="https://www.instagram.com/username"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="mt-4 mx-auto flex w-fit items-center justify-center gap-1 rounded-full bg-[#6D1212] px-4 py-2 text-[#FFE9C7] transition duration-300 hover:bg-[#5A0D0D] active:scale-95 animate-pulse-button">

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            class="w-3.5 h-3.5">
                            <path d="M7.75 2h8.5A5.76 5.76 0 0 1 22 7.75v8.5A5.76 5.76 0 0 1 16.25 22h-8.5A5.76 5.76 0 0 1 2 16.25v-8.5A5.76 5.76 0 0 1 7.75 2Zm0 1.5A4.26 4.26 0 0 0 3.5 7.75v8.5a4.26 4.26 0 0 0 4.25 4.25h8.5a4.26 4.26 0 0 0 4.25-4.25v-8.5a4.26 4.26 0 0 0-4.25-4.25h-8.5ZM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10Zm0 1.5a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm5.25-2a1.25 1.25 0 1 1 0 2.5 1.25 1.25 0 0 1 0-2.5Z" />
                        </svg>

                        <span class="font-inria text-[13px] leading-none">
                            Instagram
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>