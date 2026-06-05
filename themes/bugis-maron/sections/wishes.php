<section
    id="wishes"
    class="page-section relative h-full w-full text-center bg-white">
    <div class="section-scroll">

        <img
            src="<?= theme_asset($theme, 'img/wishes/ornamen-abstrak-atas.webp') ?>"
            class="absolute z-20 -top-[9px] -left-[9px] w-[445px] max-w-none"
            alt="ornamen abstrak atas" />

        <img
            src="<?= theme_asset($theme, 'img/bg-atas.webp') ?>"
            class="absolute z-0 top-0 left-0 w-[485px] max-w-none"
            alt="bg atas" />

        <img
            src="<?= theme_asset($theme, 'img/bg.webp') ?>"
            class="absolute z-0 w-[654px] h-[1214px] max-w-none max-h-none -bottom-50"
            alt="bg" />

        <div class="absolute top-[50px] left-1/2 -translate-x-1/2 z-10 w-[340px]">
            <p class="font-kaisei text-[38px] text-[#6D1212] mt-12 text-left">
                RSVP &
            </p>
            <p class="font-kolker text-[48px] text-[#6D1212] text-left -mt-7">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Best Wishes
            </p>

            <form class="mx-2 font-inria space-y-4">
                <div>
                    <input
                        class="border-2 border-[#6D1212] rounded-[9px] w-full bg-[#FFE9D2] px-3 py-1.5"
                        placeholder="Nama"
                        type="text">
                </div>

                <div>
                    <textarea
                        placeholder="Ucapan"
                        rows="4"
                        class="border-2 border-[#6D1212] rounded-[9px] w-full bg-[#FFE9D2] px-3 py-1.5"
                        name=""
                        id=""></textarea>
                </div>

                <div class="relative -mt-1">
                    <select
                        required
                        class="w-full appearance-none rounded-[9px] border-2 border-[#6D1212] bg-[#FFE9D2] px-3 py-1.5 pr-10 text-[#6D1212]/50 invalid:text-[#6D1212]/50 valid:text-[#6D1212]">

                        <option value="" selected disabled>
                            Konfirmasi Kehadiran
                        </option>

                        <option value="hadir">
                            Hadir
                        </option>

                        <option value="tidak_hadir">
                            Tidak Hadir
                        </option>

                        <option value="masih_ragu">
                            Masih Ragu
                        </option>
                    </select>

                    <svg
                        class="pointer-events-none absolute right-3 top-1/2 h-4 w-4 -translate-y-1/2 text-[#6D1212]"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 9l-7 7-7-7" />
                    </svg>
                </div>

                <div class="flex justify-start">
                    <button class="font-bold text-[20px] bg-[#6D1212] px-4 py-1.5 rounded-[9px] text-[#FFC8AA]">
                        Kirim
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>