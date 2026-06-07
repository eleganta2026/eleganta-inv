<section
    id="maps"
    data-viewport-bg="<?= theme_asset($theme, 'img/bg.webp') ?>"
    class="page-section relative h-full w-full">

    <img
        src="<?= theme_asset($theme, 'img/bg-atas.webp') ?>"
        class="absolute z-0 top-0 left-0 w-[485px] max-w-none"
        alt="bg atas" />
    <img
        src="<?= theme_asset($theme, 'img/bg-atas.webp') ?>"
        class="absolute -z-10 -top-68 -left-10 w-[485px] max-w-none rotate-180"
        alt="bg atas" />

    <img
        src="<?= theme_asset($theme, 'img/maps/bg-rumah.webp') ?>"
        class="absolute z-0 top-[448px] left-[53px] w-[553px] max-w-none"
        alt="bg rumah" />

    <img
        src="<?= theme_asset($theme, 'img/ornamen-bawah-sudut.webp') ?>"
        class="absolute z-0 top-[410px] -left-[120px] w-[273px] -rotate-[8deg]"
        alt="bg rumah" />

    <img
        src="<?= theme_asset($theme, 'img/ornamen-bawah-sudut.webp') ?>"
        class="absolute z-0 top-[400px] left-[276px] w-[273px] rotate-[8deg] -scale-x-100"
        alt="bg rumah" />

    <img
        src="<?= theme_asset($theme, 'img/awan.webp') ?>"
        class="absolute z-0 top-[230px] -left-[7px] w-[701px] max-w-none"
        alt="awan" />

    <div class="w-[255px] border-t-2 border-[#6D1212] absolute top-[80px] right-0"></div>

    <div class="absolute top-[40px] left-[30px] z-10">
        <p class="font-kaisei font-bold text-[40px] text-[#6D1212] leading-[45px] mt-4">
            MAPS
        </p>
    </div>


    <div class="absolute top-[100px] left-1/2 -translate-x-1/2 z-10">
        <div class="text-center items-center justify-center space-y-2 text-[#6D1212] font-inria mt-2">

            <div class="w-[350px] border-3 rounded-[30px] p-1 mt-6">
                <div class="relative w-full border-2 rounded-[25px] overflow-hidden">

                    <img
                        class="w-full object-cover blur-[1px]"
                        src="<?= theme_asset($theme, 'img/maps/maps.webp') ?>"
                        alt="maps">

                    <img
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-10 w-[150px]"
                        src="<?= theme_asset($theme, 'img/maps/maps-pin.webp') ?>"
                        alt="maps pin">

                </div>
            </div>

            <p class="font-bold text-[22px] w-[250px] mx-auto">
                Gedung Islamic Center
                Jln. H. Agussalim No. 157 Kota Parepare
            </p>

            <button class="bg-[#6D1212] text-[#FFC8AA] text-[18px] px-4 py-2 rounded-lg mt-3">
                Buka Maps
            </button>
        </div>
    </div>
</section>