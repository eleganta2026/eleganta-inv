<section
    id="hero"
    class="page-section relative h-full w-full text-center">

    <img
        src="<?= theme_asset($theme, 'img/hero/bg.webp') ?>"
        class="absolute z-0 h-full w-full object-cover"
        alt="bg" />

    <img
        src="<?= theme_asset($theme, 'img/hero/ornamen-atas.webp') ?>"
        class="absolute z-0 -top-[82px] -left-[110px] w-[403px]"
        alt="ornamen atas kiri" />

    <img
        src="<?= theme_asset($theme, 'img/hero/ornamen-atas.webp') ?>"
        class="absolute z-0 -top-[44px] left-[159px] w-[403px] -scale-x-100"
        alt="ornamen atas kanan" />

    <img
        src="<?= theme_asset($theme, 'img/hero/ornamen-besar.webp') ?>"
        class="absolute z-0 -top-[69px] -left-[53px] w-[546px] max-w-none"
        alt="ornamen besar" />

    <img
        src="<?= theme_asset($theme, 'img/hero/ornamen-tangkai-bawah.webp') ?>"
        class="absolute z-0 top-[506px] -left-[95px] w-[282px]"
        alt="ornamen tangkai bawah kiri" />

    <img
        src="<?= theme_asset($theme, 'img/hero/ornamen-tangkai-bawah.webp') ?>"
        class="absolute z-0 top-[513px] left-[172px] w-[282px] -rotate-[7deg]"
        alt="ornamen tangkai bawah kanan" />

    <img
        src="<?= theme_asset($theme, 'img/hero/ornamen-bunga-kiri.webp') ?>"
        class="absolute z-0 top-[368px] -left-[119px] w-[305px]"
        alt="ornamen bunga kiri" />

    <img
        src="<?= theme_asset($theme, 'img/hero/ornamen-bunga-kanan.webp') ?>"
        class="absolute z-0 top-[366px] left-[196px] w-[331px]"
        alt="ornamen bunga kanan" />

    <img
        src="<?= theme_asset($theme, 'img/hero/ornamen-bawah-sudut.webp') ?>"
        class="absolute z-0 top-[453px] -left-[119px] w-[273px]"
        alt="ornamen bawah sudut kiri" />

    <img
        src="<?= theme_asset($theme, 'img/hero/ornamen-bunga-bawah.webp') ?>"
        class="absolute z-0 top-[592px] left-[154px] w-[272px] -rotate-[2deg]"
        alt="ornamen bunga bawah kanan" />

    <img
        src="<?= theme_asset($theme, 'img/hero/ornamen-bawah-sudut.webp') ?>"
        class="absolute z-0 top-[453px] left-[254px] w-[273px] -scale-x-100"
        alt="ornamen bawah sudut kanan" />

    <img
        src="<?= theme_asset($theme, 'img/hero/ornamen-bunga-bawah.webp') ?>"
        class="absolute z-0 top-[578px] -left-[43px] w-[272px]"
        alt="ornamen bunga bawah kiri" />

    <img
        src="<?= theme_asset($theme, 'img/hero/awan.webp') ?>"
        class="absolute z-0 top-[254px] left-0 w-[701px] max-w-none"
        alt="ornamen bunga bawah kiri" />


    <div class="absolute top-65.5 left-1/2 z-10 w-full -translate-x-1/2 px-4">
        <p class="font-imperial text-[40px] text-[#6D1212]">
            The Wedding Of
        </p>

        <p class="font-kaisei font-bold text-[36px] text-[#6D1212] leading-11.5">
            IQBAL
            <br>
            &
            <br>
            FIKA
        </p>

        <p class="font-inria text-[12px] text-[#6D1212] mt-5.5">
            Kepada Bpk / Ibu / Saudara(i)
        </p>

        <p class="font-inria font-bold text-[18px] mx-auto max-w-[240px] text-[#6D1212] mt-2.5">
            Fadlullah Heri Farid S.Kom.
        </p>

        <button id="openInvitationBtn"
            onclick="openInvitation()"
            class="font-inria font-bold text-[16px] text-white w-43 h-10.5 bg-linear-to-r from-[#4E0606] to-[#BE1515] rounded-[15px] mt-5">
            OPEN INVITATION
        </button>
    </div>
</section>