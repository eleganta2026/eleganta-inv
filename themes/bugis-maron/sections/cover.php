<section
    id="cover"
    class="fixed inset-0 z-50 text-center overflow-hidden">
    <div class="cover-frame">

        <div
            class="absolute inset-0 z-0 bg-cover bg-center bg-no-repeat pointer-events-none"
            style="background-image: url('<?= inv_asset('img/cover.jpeg') ?>');">
        </div>

        <div
            class="absolute inset-0 z-[1] pointer-events-none"
            style="background: linear-gradient(to bottom, rgba(0,0,0,.30), transparent, rgba(0,0,0,.35));">
        </div>

        <div class="relative z-10 flex h-full flex-col justify-between px-4 py-20">
            <div class="w-full">
                <p class="font-imperial text-[28px] text-white">
                    The Wedding Of
                </p>

                <p class="font-kaisei text-[38px] text-white leading-11.5">
                    IQBAL
                    &
                    FIKA
                </p>
            </div>

            <div class="w-full">
                <p class="font-inria font-semibold text-[12px] text-white">
                    Kepada Bpk / Ibu / Saudara(i)
                </p>

                <p class="font-inria font-bold text-[18px] mx-auto max-w-[240px] text-white mt-2.5">
                    Fadlullah Heri Farid S.Kom.
                </p>

                <button
                    id="openInvitationBtn"
                    onclick="openInvitation()"
                    class="font-inria font-bold text-[16px] text-white w-43 h-10.5 bg-linear-to-r from-[#4E0606] to-[#BE1515] rounded-[15px] mt-5">
                    OPEN INVITATION
                </button>
            </div>
        </div>
    </div>
</section>