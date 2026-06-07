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
            class="absolute z-0 w-[654px] h-[1214px] max-w-none max-h-none -bottom-170"
            alt="bg" />

        <img
            src="<?= theme_asset($theme, 'img/bunga-atas.webp') ?>"
            class="absolute z-10 -left-[20px] -bottom-170 w-[464px] max-w-none scale-y-[-1] scale-x-[-1] opacity-44"
            alt="bunga atas" />

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

            <div class="mx-2 space-y-4 mt-10">
                <p class="font-kaisesi font-bold text-[23px]">
                    Attendance
                </p>

                <div class="flex justify-between mx-2 font-inria">
                    <div class="w-[70px] text-center">
                        <div class="flex h-[50px] items-center justify-center rounded-[9px] bg-[#6D1212]">
                            <p class="text-[24px] font-bold text-[#FFC8AA]">
                                100
                            </p>
                        </div>

                        <p class="mt-2 leading-5 font-light text-[14px]">
                            Not Sure
                        </p>
                    </div>

                    <div class="w-[70px] text-center">
                        <div class="flex h-[50px] items-center justify-center rounded-[9px] bg-[#6D1212]">
                            <p class="text-[24px] font-bold text-[#FFC8AA]">
                                100
                            </p>
                        </div>

                        <p class="mt-2 leading-5 font-light text-[14px]">
                            Planning To Attend
                        </p>
                    </div>

                    <div class="w-[70px] text-center">
                        <div class="flex h-[50px] items-center justify-center rounded-[9px] bg-[#6D1212]">
                            <p class="text-[24px] font-bold text-[#FFC8AA]">
                                100
                            </p>
                        </div>

                        <p class="mt-2 leading-5 font-light text-[14px]">
                            Can't Attend
                        </p>
                    </div>
                </div>

                <div class="bg-white/50 rounded-[9px] p-2 space-y-3 mt-6">

                    <div class="bg-[#CCB295]/40 rounded-[9px] p-1">
                        <div class="flex justify-between items-start">
                            <div class="flex items-center gap-1.5">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="h-10 w-10">
                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </div>

                                <div class="text-left">
                                    <p class="text-[14px] font-bold text-[#574A4A] leading-none">
                                        Fadlullah Heri
                                    </p>

                                    <p class="mt-1 text-[12px] italic text-[#AE9292] leading-none">
                                        I’m planning to attend
                                    </p>
                                </div>
                            </div>

                            <p class="text-[10px] italic text-[#AE9292] pr-1">
                                04/04/2026
                            </p>
                        </div>

                        <div class="mt-2 text-left text-[14px] mx-2 pb-3">
                            Happy Wedding Kak Iqbal Ganteng, Sakinah Mawadah Warahmah
                        </div>
                    </div>

                    <div class="bg-[#CCB295]/40 rounded-[9px] p-1">
                        <div class="flex justify-between items-start">
                            <div class="flex items-center gap-1.5">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="h-10 w-10">
                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </div>

                                <div class="text-left">
                                    <p class="text-[14px] font-bold text-[#574A4A] leading-none">
                                        Nama Tamu
                                    </p>

                                    <p class="mt-1 text-[12px] italic text-[#AE9292] leading-none">
                                        Can't attend
                                    </p>
                                </div>
                            </div>

                            <p class="text-[10px] italic text-[#AE9292] pr-1">
                                04/04/2026
                            </p>
                        </div>

                        <div class="mt-2 text-left text-[14px] mx-2 pb-3">
                            Happy Wedding Kak Iqbal Ganteng, Sakinah Mawadah Warahmah
                        </div>
                    </div>

                    <div class="bg-[#CCB295]/40 rounded-[9px] p-1">
                        <div class="flex justify-between items-start">
                            <div class="flex items-center gap-1.5">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="h-10 w-10">
                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </div>

                                <div class="text-left">
                                    <p class="text-[14px] font-bold text-[#574A4A] leading-none">
                                        Nama Tamu
                                    </p>

                                    <p class="mt-1 text-[12px] italic text-[#AE9292] leading-none">
                                        Not sure
                                    </p>
                                </div>
                            </div>

                            <p class="text-[10px] italic text-[#AE9292] pr-1">
                                04/04/2026
                            </p>
                        </div>

                        <div class="mt-2 text-left text-[14px] mx-2 pb-3">
                            Happy Wedding Kak Iqbal Ganteng, Sakinah Mawadah Warahmah
                        </div>
                    </div>

                    <div class="bg-[#CCB295]/40 rounded-[9px] p-1">
                        <div class="flex justify-between items-start">
                            <div class="flex items-center gap-1.5">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="h-10 w-10">
                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </div>

                                <div class="text-left">
                                    <p class="text-[14px] font-bold text-[#574A4A] leading-none">
                                        Nama Tamu
                                    </p>

                                    <p class="mt-1 text-[12px] italic text-[#AE9292] leading-none">
                                        I’m planning to attend
                                    </p>
                                </div>
                            </div>

                            <p class="text-[10px] italic text-[#AE9292] pr-1">
                                04/04/2026
                            </p>
                        </div>

                        <div class="mt-2 text-left text-[14px] mx-2 pb-3">
                            Happy Wedding Kak Iqbal Ganteng, Sakinah Mawadah Warahmah
                        </div>
                    </div>

                    <div class="bg-[#CCB295]/40 rounded-[9px] p-1">
                        <div class="flex justify-between items-start">
                            <div class="flex items-center gap-1.5">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="h-10 w-10">
                                        <path stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </div>

                                <div class="text-left">
                                    <p class="text-[14px] font-bold text-[#574A4A] leading-none">
                                        Nama Tamu
                                    </p>

                                    <p class="mt-1 text-[12px] italic text-[#AE9292] leading-none">
                                        Not sure
                                    </p>
                                </div>
                            </div>

                            <p class="text-[10px] italic text-[#AE9292] pr-1">
                                04/04/2026
                            </p>
                        </div>

                        <div class="mt-2 text-left text-[14px] mx-2 pb-3">
                            Happy Wedding Kak Iqbal Ganteng, Sakinah Mawadah Warahmah
                        </div>
                    </div>

                </div>

                <div class="mt-2 flex items-center justify-center gap-1.5 font-inria">
                    <button class="rounded-[6px] bg-[#CCB295]/40 px-2 py-1 text-[12px] text-[#574A4A]">
                        Prev
                    </button>

                    <button class="h-7 w-7 rounded-[6px] bg-[#6D1212] text-[12px] text-[#FFC8AA]">
                        1
                    </button>

                    <button class="h-7 w-7 rounded-[6px] bg-[#CCB295]/40 text-[12px] text-[#574A4A]">
                        2
                    </button>

                    <button class="h-7 w-7 rounded-[6px] bg-[#CCB295]/40 text-[12px] text-[#574A4A]">
                        3
                    </button>

                    <button class="rounded-[6px] bg-[#CCB295]/40 px-2 py-1 text-[12px] text-[#574A4A]">
                        Next
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>