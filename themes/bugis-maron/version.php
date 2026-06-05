<?php

header('Content-Type: application/json');
header('Cache-Control: no-cache, no-store, must-revalidate');

$latest = 0;

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator(
        __DIR__,
        FilesystemIterator::SKIP_DOTS
    )
);

foreach ($iterator as $file) {

    if (!$file->isFile()) {
        continue;
    }

    if ($file->getFilename() === 'version.php') {
        continue;
    }

    $latest = max(
        $latest,
        $file->getMTime()
    );
}

echo json_encode([
    'version' => $latest,
]);
