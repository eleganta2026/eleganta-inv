<section
    id="gallery"
    data-viewport-bg="<?= theme_asset($theme, 'img/bg.webp') ?>"
    class="page-section relative h-full w-full text-center">

    <div class="animate-ornament-from-top-right">
        <img
            src="<?= theme_asset($theme, 'img/bunga-atas.webp') ?>"
            class="absolute z-0 -top-[120px] left-[120px] w-[464px] max-w-none animate-sway-top-right"
            alt="bunga atas" />
    </div>

    <div class="animate-ornament-from-bottom-right-custom">
        <img
            src="<?= theme_asset($theme, 'img/gallery/bunga-bawah-kanan.webp') ?>"
            class="absolute z-0 top-[470px] left-[204px] w-[308px] animate-sway-bottom-right"
            alt="bunga bawah kanan" />
    </div>

    <div class="animate-ornament-from-bottom-right-custom">
        <div class="absolute top-[530px] left-[100px] -rotate-[48deg]">
            <img
                src="<?= theme_asset($theme, 'img/gallery/bunga-bawah-kanan.webp') ?>"
                class="w-[308px] animate-sway-bottom-right"
                alt="bunga bawah kanan" />
        </div>
    </div>

    <?php
    $diamondPhotos = [
        [
            'class' => 'absolute top-50 left-37.5 z-0 w-21.25 animate-photo-from-top-custom',
            // 'src' => inv_asset('img/foto-mempelai.jpeg'),
        ],
        [
            'class' => 'absolute top-50 left-65 z-0 w-21.25 animate-photo-from-top-custom',
            // 'src' => inv_asset('img/foto-mempelai.jpeg'),
        ],
        [
            'class' => 'absolute top-61.25 left-76.25 z-0 w-21.25 animate-photo-from-right-custom',
            'delay' => '1.5s',
            'src' => '',
        ],
        [
            'class' => 'absolute top-82.5 left-5 z-0 w-21.25 animate-photo-from-left-custom',
            'delay' => '1.5s',
        ],
        [
            'class' => 'absolute top-125 left-5 z-0 w-21.25 animate-photo-from-left-custom',
            'delay' => '1.5s',
            // 'src' => inv_asset('img/foto-mempelai.jpeg'),
        ],
        [
            'class' => 'absolute top-147.5 left-5 z-0 w-21.25 animate-photo-from-bottom-custom',
        ],
        [
            'class' => 'absolute top-107.5 left-72.5 z-0 w-21.25 animate-photo-from-right-custom',
            'delay' => '1.5s',
        ],
        [
            'class' => 'absolute top-150 left-72.5 z-0 w-21.25 animate-photo-from-bottom-custom',
            'delay' => '1.5s',
        ],
        [
            'class' => 'absolute top-147.5 left-47.5 z-0 w-21.25 animate-photo-from-bottom-custom',
            'delay' => '1.5s',
        ],
        [
            'class' => 'absolute top-115 left-37.5 z-0 w-21.25 animate-photo-zoom-in-custom',
        ],
        [
            'class' => 'absolute top-126.25 left-16.25 z-0 w-41.25 animate-photo-from-left-custom',
        ],
        [
            'class' => 'absolute top-118.75 left-51.25 z-0 w-41.25 animate-photo-from-right-custom',
        ],
        [
            'class' => 'absolute top-51.25 left-6.25 z-0 w-41.25 animate-photo-from-left-custom',
        ],
        [
            'class' => 'absolute top-93.75 left-6.25 z-0 w-41.25 animate-photo-from-left-custom',
        ],
        [
            'class' => 'absolute top-58.75 left-27.5 z-0 w-68.75 animate-photo-from-right-custom',
            // 'src' => inv_asset('img/foto-mempelai.jpeg'),
        ],
    ];
    ?>

    <?php foreach ($diamondPhotos as $index => $photo): ?>
        <?php
        $photoNumber = $index + 1;
        $photoSrc = $photo['src'] ?? '';
        ?>

        <div
            <?php if (!empty($photo['delay'])): ?>
            style="--delay: <?= $photo['delay'] ?>;"
            <?php endif; ?>
            class="<?= $photo['class'] ?>">

            <div class="aspect-square overflow-hidden bg-[#6D1212]/10 [clip-path:polygon(50%_0%,100%_50%,50%_100%,0%_50%)]">
                <?php if (!empty($photoSrc)): ?>
                    <img
                        src="<?= $photoSrc ?>"
                        class="h-full w-full object-cover"
                        alt="Foto <?= $photoNumber ?>" />
                <?php else: ?>
                    <div class="flex h-full w-full items-center justify-center bg-[#FFE9C7] text-[#6D1212]">
                        <span class="font-kaisei text-[22px] font-bold">
                            <?= $photoNumber ?>
                        </span>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>

    <div class="absolute top-[80px] left-[25px] z-10 text-left animate-text-from-left">
        <p class="font-imperial text-[64px] text-[#6D1212] leading-[50px]">
            Sweet
            <br />
            &nbsp;&nbsp;&nbsp;Memories
        </p>
    </div>
</section>