@extends('app')
@section('title')
    Home
@endsection
@section('pages')
    @include('includes.navbar-home')
    <main>
        {{-- <div class="h-28 bg-red-500 w-full bg-no-repeat bg-center" style="background-image: url('{{asset('assets/img/background.png')}}')">

        </div> --}}
        <div class="relative z-0 h-64 overflow-hidden rounded-b-xl md:h-80 lg:h-[450px]">
            <img src="{{ asset('assets/img/background.png') }}" class="h-full w-full brightness-50" alt="logo">
            <div class="absolute left-6 top-20 text-white md:left-10 md:top-1/2 md:-translate-y-1/2">
                <div class="w-56 font-bold md:w-96 md:text-2xl lg:w-[430px] lg:text-3xl">
                    Satu Langkah <span class="text-[#17A2B8]">Klik</span> sejuta keindahan Konawe menanti.
                </div>
                <div class="w-60 text-[8px] md:w-[365px] md:text-xs lg:w-[440px] lg:text-sm">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Non enim praesent elementum facilisis leo vel fringilla. Mattis ullamcorper velit
                    sed ullamcorper morbi tincidunt. Porta nibh venenatis cras sed felis eget.
                </div>
            </div>
        </div>

        <div class="mt-2 grid w-full place-items-center gap-3 p-3">
            <h2 class="w-48 text-center font-bold md:w-max lg:text-lg">Konawe Selatan - Surga Tersembunyi Bumi Anoa</h2>
            <figure class="max-w-72 flex flex-col p-3 md:max-w-max md:flex-row-reverse md:items-center md:gap-5 lg:max-w-full lg:w-full md:justify-evenly">
                <img src="{{ asset('assets/img/gambar-1.png') }}" alt="gambar-1"
                    class="rounded-br-[35px] rounded-tl-[35px]">
                <figcaption class="mt-4 flex flex-col gap-4 md:h-full md:gap-5">
                    <h2 class="font-semibold md:text-lg lg:text-xl">Konawe adalah Permata Tersembunyi</h2>
                    <p class="text-[10px] md:w-80 md:text-sm">Tidak ada tempat lain seperti Konawe Selatan. Kombinasi magis dari budaya yang
                        kaya, penduduk yang
                        ramah, alam yang memukau, beragam aktivitas, iklim tropis, dan akomodasi yang nyaman. Konawe Selatan
                        adalah salah satu destinasi wisata tersembunyi di Indonesia dan itu memang layak. Ada banyak
                        keajaiban tersembunyi untuk setiap orang jelajahi dan temukan.</p>
                    <p class="font-bold text-[11px] md:text-sm md:w-80">KonaweTourism.com sepenuhnya berdedikasi untuk mempermudah perencanaan perjalanan terbaik Anda di
                        Konawe Selatan.</p>
                </figcaption>
            </figure>
        </div>
    </main>
@endsection
