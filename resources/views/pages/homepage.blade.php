@extends('app')
@section('title')
    Home
@endsection
@section('pages')
    @include('includes.navbar')
    <main>
        @include('includes.hero')

        <div class="mt-2 grid w-full place-items-center gap-3 p-3">
            <h2 class="text-center font-bold md:w-max lg:text-xl">Konawe Selatan - Surga Tersembunyi Bumi Anoa</h2>
            <figure
                class="flex w-[90%] flex-col p-3 md:max-w-3xl md:flex-row-reverse md:items-center md:justify-between md:gap-5 lg:mt-5 lg:w-full lg:max-w-5xl">
                <img src="{{ asset('assets/img/gambar-1.jpg') }}" alt="gambar-1"
                    class="max-w-72 mx-auto w-full rounded-br-[35px] rounded-tl-[35px] md:mx-0 lg:max-w-[450px]">
                <figcaption class="mt-4 flex flex-col gap-4 md:h-full md:gap-5">
                    <h2 class="mx-auto font-semibold md:mx-0 md:text-lg lg:text-xl">Konawe adalah Permata Tersembunyi</h2>
                    <p class="w-full text-sm md:max-w-[340px] md:text-sm lg:max-w-[450px] lg:text-lg">Tidak ada tempat lain
                        seperti Konawe Selatan. Kombinasi magis
                        dari budaya yang
                        kaya, penduduk yang
                        ramah, alam yang memukau, beragam aktivitas, iklim tropis, dan akomodasi yang nyaman. Konawe Selatan
                        adalah salah satu destinasi wisata tersembunyi di Indonesia dan itu memang layak. Ada banyak
                        keajaiban tersembunyi untuk setiap orang jelajahi dan temukan.</p>
                    <p class="text-sm font-bold md:w-80 md:text-sm">KonaweTourism.com sepenuhnya berdedikasi untuk
                        mempermudah perencanaan perjalanan terbaik Anda di
                        Konawe Selatan.</p>
                </figcaption>
            </figure>
        </div>

        <div class="my-10 grid w-full place-items-center gap-3">
            @if ($topDestinasi->count() > 0)
                <h2 class="font-bold md:text-lg lg:text-xl" data-aos="fade-up" data-aos-offset="190"
                    data-aos-duration="500">Top
                    Destinations</h2>
            @endif
            <div class="grid w-full max-w-max grid-cols-1 gap-5 md:grid-cols-2 md:gap-10 lg:grid-cols-3">
                @foreach ($topDestinasi as $wisata)
                    <div data-aos="fade-up" data-aos-offset="230" data-aos-duration="500"
                        class="group relative h-80 w-64 justify-self-center overflow-hidden rounded-md bg-white text-gray-50 shadow-[0_0_5px_rgba(0,0,0,.5)] duration-500">
                        <div>
                            <div class="relative h-60 w-full overflow-hidden rounded-t-md">
                                <div class="group">
                                    <div class="image-container">
                                        <div class="h-60 w-full rounded-t-md bg-cover bg-center duration-500 group-hover:scale-110"
                                            style="background-image: url({{ route('img', $wisata->gambar) }})">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="absolute -bottom-11 left-0 w-56 w-full p-5 py-5 duration-500 group-hover:-translate-y-10">
                                <div
                                    class="absolute left-0 -z-10 h-28 w-64 border opacity-0 duration-500 group-hover:bg-white group-hover:opacity-100">
                                </div>
                                <span
                                    class="mt-3 inline-block text-lg font-bold text-black duration-500">{{ $wisata->nama_wisata }}</span>
                                <div class="mt-5 flex items-center justify-between">
                                    <a href="{{ route('detail', $wisata->id) }}"
                                        class="before:size-0 hover:before:size-56 relative inline-block w-60 w-full w-full overflow-hidden rounded-sm border border-black bg-transparent px-2 py-1 opacity-0 duration-500 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-black before:transition-all before:duration-[1s] before:content-[''] after:absolute after:left-1/2 after:top-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:text-black after:transition-all after:duration-[1s] after:content-['Detail'] hover:after:text-white group-hover:opacity-100">
                                        Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        @livewire('ulasan')
    </main>

    @include('includes.footer')
@endsection
