<div class="relative z-0 mt-20 h-64 select-none overflow-hidden bg-cover bg-top bg-no-repeat md:h-80 lg:h-[500px]"
    style="background-image: url({{ asset('assets/img/3.png') }})">
    {{-- <img loading="lazy" src="{{ asset('assets/img/2.jpg') }}" class="h-full w-full brightness-50 bg-center bg-cover" alt="logo"> --}}
    @if (request()->routeIs('homepage'))
        <div
            class="absolute left-6 top-20 animate-[text-focus-in_2s_both] text-white md:left-10 md:top-1/2 md:-translate-y-1/2">
            <div class="w-56 font-bold md:w-96 md:text-2xl lg:w-[430px] lg:text-3xl">
                Satu Langkah <span class="text-[#17A2B8]">Klik</span> sejuta keindahan Konawe menanti.
            </div>
        </div>
    @elseif (request()->is('destinasi-wisata'))
        <div
            class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 animate-[text-focus-in_2s_both] text-lg font-bold text-white sm:text-2xl md:text-4xl">
            Destinasi Wisata
        </div>
    @elseif (request()->is('tentang-kami'))
        <div
            class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 animate-[text-focus-in_2s_both] text-lg font-bold text-white sm:text-2xl md:text-4xl">
            Tentang Kami
        </div>
    @endif
</div>
