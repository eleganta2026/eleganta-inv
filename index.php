<?php
$undangan = require __DIR__ . '/data.php';

define('INV_BASE_URL', 'http://localhost/inv');

function inv_asset(string $path = ''): string
{
    $baseUrl = rtrim(INV_BASE_URL, '/');
    $path = ltrim($path, '/');

    return "{$baseUrl}/assets/{$path}";
}

function theme_asset(string $theme, string $path = ''): string
{
    $baseUrl = rtrim(INV_BASE_URL, '/');
    $theme = trim($theme, '/');
    $path = ltrim($path, '/');

    return "{$baseUrl}/themes/{$theme}/assets/{$path}";
}

$slug = trim($_GET['slug'] ?? '', '/');
$slug = preg_replace('/[^a-z0-9\-]/', '', strtolower($slug));

if (!$slug || !isset($undangan[$slug])) {
    http_response_code(404);

    $error_code = '404';
    $error_title = 'Undangan Tidak Di Temukan';
    $error_description = 'Maaf, Undangan Yang Kamu Cari Tidak Tersedia Atau Mungkin Sudah Dipindahkan. Yuk Kembali Ke Halaman Utama Eleganta.';

    require __DIR__ . '/error.php';
    exit;
}

$nama_tamu = trim($_GET['to'] ?? '') ?: null;

$data = $undangan[$slug];
$data['nama_tamu'] = $nama_tamu;

$theme = $data['theme'];
$theme_path = __DIR__ . "/themes/{$theme}/index.php";

if (!file_exists($theme_path)) {
    http_response_code(500);

    $error_code = '500';
    $error_title = 'Terjadi Kesalahan Sistem';
    $error_description = 'Maaf, Saat Ini Undangan Tidak Dapat Di Tampilkan Karena Terjadi Kendala Pada Sistem. Silakan Coba Beberapa Saat Lagi.';

    require __DIR__ . '/error.php';
    exit;
}

require $theme_path;
