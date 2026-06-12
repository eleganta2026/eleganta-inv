<section
    id="hero"
    data-bg="#CE9561"
    data-viewport-bg="<?= theme_asset($theme, 'img/hero/bg.webp') ?>"
    class="page-section relative h-full w-full text-center">

    <img
        src="<?= theme_asset($theme, 'img/hero/rumah.webp') ?>"
        class="hero-house absolute z-0 left-1/2 max-w-none"
        alt="ornamen besar" />

    <div class="hero-door-left absolute z-20 bottom-0 left-0 h-full">
        <img
            src="<?= theme_asset($theme, 'img/hero/pintu.webp') ?>"
            class="h-full max-w-none block"
            alt="pintu kiri" />
    </div>

    <div class="hero-door-right absolute z-20 bottom-0 right-0 h-full">
        <img
            src="<?= theme_asset($theme, 'img/hero/pintu.webp') ?>"
            class="h-full max-w-none block -scale-x-100"
            alt="pintu kanan" />
    </div>

    <div class="hero-top-ornament hero-top-ornament-left absolute z-0 -top-20.5 -left-27.5 w-[403px]">
        <img
            src="<?= theme_asset($theme, 'img/hero/ornamen-atas.webp') ?>"
            class="w-full block"
            alt="ornamen atas kiri" />
    </div>

    <div class="hero-top-ornament hero-top-ornament-right absolute z-0 -top-20.5 left-37.5 w-[403px]">
        <img
            src="<?= theme_asset($theme, 'img/hero/ornamen-atas.webp') ?>"
            class="w-full block -scale-x-100"
            alt="ornamen atas kanan" />
    </div>

    <img
        src="<?= theme_asset($theme, 'img/hero/ornamen-besar.webp') ?>"
        class="hero-main-ornament absolute z-0 -top-[24px] -left-[28px] w-[465px] max-w-none"
        alt="ornamen besar" />

    <div class="hero-stem hero-stem-left absolute z-0 top-[506px] -left-[95px] w-[282px]">
        <img
            src="<?= theme_asset($theme, 'img/hero/ornamen-tangkai-bawah.webp') ?>"
            class="w-full block"
            alt="ornamen tangkai bawah kiri" />
    </div>

    <div class="hero-stem hero-stem-right absolute z-0 top-[513px] left-[172px] w-[282px]">
        <img
            src="<?= theme_asset($theme, 'img/hero/ornamen-tangkai-bawah.webp') ?>"
            class="w-full block -rotate-[7deg]"
            alt="ornamen tangkai bawah kanan" />
    </div>

    <img
        src="<?= theme_asset($theme, 'img/hero/ornamen-bunga-kiri.webp') ?>"
        class="hero-flower-side hero-flower-left absolute z-0 top-[368px] -left-[119px] w-[305px]"
        alt="ornamen bunga kiri" />

    <img
        src="<?= theme_asset($theme, 'img/hero/ornamen-bunga-kanan.webp') ?>"
        class="hero-flower-side hero-flower-right absolute z-0 top-[366px] left-[196px] w-[331px]"
        alt="ornamen bunga kanan" />

    <img
        src="<?= theme_asset($theme, 'img/hero/ornamen-bunga-bawah.webp') ?>"
        class="hero-flower-bottom hero-flower-bottom-left absolute z-0 top-[580px] -left-[36px] w-[270px]"
        alt="ornamen bunga bawah kiri" />

    <img
        src="<?= theme_asset($theme, 'img/hero/ornamen-bunga-bawah.webp') ?>"
        class="hero-flower-bottom hero-flower-bottom-right absolute z-0 top-[580px] -right-[46px] w-[270px]"
        alt="ornamen bunga bawah kanan" />

    <div class="hero-corner-bottom hero-corner-bottom-left absolute z-0 top-[450px] -left-[110px] w-[275px]">
        <img
            src="<?= theme_asset($theme, 'img/ornamen-bawah-sudut.webp') ?>"
            class="w-full block"
            alt="ornamen bawah sudut kiri" />
    </div>

    <div class="hero-corner-bottom hero-corner-bottom-right absolute z-0 top-[450px] left-[250px] w-[275px]">
        <img
            src="<?= theme_asset($theme, 'img/ornamen-bawah-sudut.webp') ?>"
            class="w-full block -scale-x-100"
            alt="ornamen bawah sudut kanan" />
    </div>

    <img
        src="<?= theme_asset($theme, 'img/awan.webp') ?>"
        class="hero-cloud absolute z-0 top-[254px] left-0 w-[701px] max-w-none"
        alt="awan" />

    <div class="absolute top-[256px] left-1/2 z-10 w-full -translate-x-1/2 px-4">
        <p class="hero-title-small font-imperial text-[40px] text-[#6D1212]">
            The Wedding Of
        </p>

        <p class="hero-title-name font-kaisei font-bold text-[36px] text-[#6D1212] leading-11.5 -mt-2">
            IQBAL
            <br>
            &
            <br>
            FIKA
        </p>
    </div>
</section>