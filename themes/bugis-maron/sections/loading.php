<div
    id="loadingScreen"
    class="fixed inset-0 z-[999999] flex flex-col items-center justify-center bg-[#F3ECE8] transition-opacity duration-700 ease-out">

    <div class="relative flex h-[66px] w-[66px] items-center justify-center rounded-full bg-white/30">
        <div class="absolute inset-0 rounded-full border border-[#DED1CA]"></div>
        <div class="absolute inset-0 rounded-full border-t-2 border-[#8C6E63] animate-spin"></div>

        <div class="flex h-[66px] w-[66px] items-center justify-center rounded-full bg-[#F3ECE8]">
            <img
                src="https://eleganta.id/assets/img/logo-eleganta.webp"
                class="w-full h-full object-contain"
                alt="Eleganta">
        </div>
    </div>

    <p class="mt-4 text-[14px] text-[#6F564D]/75">
        <span id="loadingTyping"></span>
        <span class="animate-pulse">|</span>
    </p>
</div>