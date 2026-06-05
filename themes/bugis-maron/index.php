<?php
if (!isset($data)) {
    http_response_code(403);
    die('Akses Langsung Tidak Di Izinkan.');
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>The Wedding of Iqbal & Fika</title>

    <link rel="stylesheet" href="<?= inv_asset('css/style.css') ?>">

    <link rel="stylesheet" href="<?= theme_asset($theme, 'css/animations.css') ?>" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imperial+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaisei+Opti:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Lateef:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kolker+Brush&display=swap" rel="stylesheet">
</head>

<body class="bg-blue-200">
    <div class="swipe-hint opacity-0 transition-opacity duration-500 pointer-events-none fixed inset-0 z-99999 flex justify-center">
        <div class="relative h-full w-full max-w-113.5">
            <video
                class="absolute -top-1 left-1/2 -translate-x-1/2 w-25 rotate-180 -scale-x-100 object-cover"
                autoplay
                muted
                loop
                playsinline>
                <source src="<?= theme_asset($theme, 'swipe.webm') ?>" type="video/webm">
            </video>

            <video
                class="absolute top-1/2 -right-5 w-25 -translate-y-1/2 -rotate-90 -scale-x-100 object-cover"
                autoplay
                muted
                loop
                playsinline>
                <source src="<?= theme_asset($theme, 'swipe.webm') ?>" type="video/webm">
            </video>
        </div>
    </div>

    <div id="viewport" class="viewport">
        <main id="app" class="canvas bg-white">
            <?php
            $sections = $data['sections'] ?? [
                'hero',
                'quotes',
                'couple',
                'story',
                'gallery',
                'video',
                'event-detail',
                'countdown',
                'maps',
                'gift',
                'wishes',
                'closing',
            ];

            foreach ($sections as $s) {
                $file = __DIR__ . "/sections/{$s}.php";

                if (file_exists($file)) {
                    include $file;
                }
            }
            ?>
        </main>
    </div>

    <script>
        window.activeSections = <?= json_encode($sections) ?>;
    </script>

    <script src="<?= inv_asset('js/canvas-scaler.js') ?>"></script>
    <script src="<?= inv_asset('js/story-controller.js') ?>"></script>
    <script src="<?= inv_asset('js/countdown.js') ?>"></script>

    <!-- Hapus Setelah Production -->
    <script src="<?= theme_asset($theme, 'js/env.js') ?>"></script>
</body>

</html>