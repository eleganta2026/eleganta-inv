<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $error_code ?> <?= $error_title ?> - Eleganta</title>

    <meta name="robots" content="noindex, nofollow">

    <link rel="stylesheet" href="<?= inv_asset('css/style.css') ?>">
</head>

<body class="bg-[#FAF7F5] text-[#2B2B2B]">
    <main class="relative isolate grid min-h-screen place-items-center overflow-hidden px-6 py-24 lg:px-8">

        <div class="absolute inset-x-0 top-0 -z-10 h-90 bg-linear-to-b from-[#EFE3DD] to-transparent"></div>

        <div class="absolute -top-24 -left-24 -z-10 h-72 w-72 rounded-full bg-[#8C6E63]/10 blur-3xl"></div>
        <div class="absolute -bottom-24 -right-24 -z-10 h-72 w-72 rounded-full bg-[#D8BFAA]/20 blur-3xl"></div>

        <div class="mx-auto max-w-2xl text-center">
            <a href="https://eleganta.id" class="inline-flex items-center justify-center">
                <img
                    src="https://eleganta.id/assets/img/logo-eleganta.webp"
                    alt="Eleganta"
                    class="h-20 w-auto">
            </a>

            <p class="mt-10 text-[28px] font-semibold tracking-[0.3em] text-[#8C6E63]">
                <?= $error_code ?>
            </p>

            <h1 class="mt-4 text-[34px] font-bold tracking-tight leading-[1.1] text-[#2B2B2B] md:text-[54px]">
                <?= $error_title ?>
            </h1>

            <p class="mx-auto mt-6 max-w-xl text-[15px] leading-7 text-gray-600 md:text-[17px]">
                <?= $error_description ?>
            </p>

            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <a
                    href="https://eleganta.id"
                    class="rounded-full bg-[#8C6E63] px-7 py-3 text-sm font-semibold text-white shadow-[0_10px_30px_rgba(140,110,99,0.25)] transition hover:-translate-y-0.5 hover:bg-[#765B52]">
                    Kembali Ke Beranda
                </a>

                <a
                    href="https://eleganta.id/themes"
                    class="rounded-full border border-[#8C6E63]/30 bg-white px-7 py-3 text-sm font-semibold text-[#8C6E63] transition hover:-translate-y-0.5 hover:border-[#8C6E63]">
                    Lihat Tema Undangan
                </a>
            </div>
        </div>
    </main>
</body>

</html>