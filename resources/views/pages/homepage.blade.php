@extends('app')
@section('title')
    Home
@endsection
@section('pages')
    @include('includes.navbar')
    <main>
        @include('includes.hero')

        <div class="mt-2 grid w-full place-items-center gap-3 p-3">
            <h2 class="w-48 text-center font-bold md:w-max lg:text-xl">Konawe Selatan - Surga Tersembunyi Bumi Anoa</h2>
            <figure
                class="max-w-72 flex flex-col p-3 md:max-w-max md:flex-row-reverse md:items-center md:justify-evenly md:gap-5 lg:w-full lg:max-w-6xl lg:max-w-full">
                <img src="{{ asset('assets/img/gambar-1.png') }}" alt="gambar-1"
                    class="rounded-br-[35px] rounded-tl-[35px]">
                <figcaption class="mt-4 flex flex-col gap-4 md:h-full md:gap-5">
                    <h2 class="font-semibold md:text-lg lg:text-xl">Konawe adalah Permata Tersembunyi</h2>
                    <p class="text-[10px] md:w-80 md:text-sm">Tidak ada tempat lain seperti Konawe Selatan. Kombinasi magis
                        dari budaya yang
                        kaya, penduduk yang
                        ramah, alam yang memukau, beragam aktivitas, iklim tropis, dan akomodasi yang nyaman. Konawe Selatan
                        adalah salah satu destinasi wisata tersembunyi di Indonesia dan itu memang layak. Ada banyak
                        keajaiban tersembunyi untuk setiap orang jelajahi dan temukan.</p>
                    <p class="text-[11px] font-bold md:w-80 md:text-sm">KonaweTourism.com sepenuhnya berdedikasi untuk
                        mempermudah perencanaan perjalanan terbaik Anda di
                        Konawe Selatan.</p>
                </figcaption>
            </figure>
        </div>


        <div class="mt-2 grid w-full place-items-center gap-3 p-3">
            <h2 class="font-bold md:text-lg lg:text-xl" data-aos="fade-up" data-aos-offset="190" data-aos-duration="500">Top Destinations</h2>
            <div class="flex w-full flex-col items-center justify-center gap-5 lg:flex-row">
                <div data-aos="fade-up" data-aos-offset="230" data-aos-duration="500"
                    class="group relative h-80 w-64 overflow-hidden rounded-md bg-white text-gray-50 shadow-[0_0_5px_rgba(0,0,0,.5)] duration-500">
                    <div class="">
                        <div class="relative h-60 w-full overflow-hidden rounded-t-md">
                            <div class="group">
                                <div class="image-container">
                                    <div class="h-60 w-full rounded-t-md bg-cover bg-center duration-500 group-hover:scale-110"
                                        style="background-image: url({{ asset('assets/img/Puncak_Ahuawali/1.jpeg') }})">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute -bottom-11 left-0 w-56 w-full p-5 py-5 duration-500 group-hover:-translate-y-10">
                            <div
                                class="absolute left-0 -z-10 h-28 w-64 border opacity-0 duration-500 group-hover:bg-white group-hover:opacity-100">
                            </div>
                            <span class="mt-3 inline-block text-lg font-bold text-black duration-500">Puncak Ahuawali</span>
                            <div class="mt-5 flex items-center justify-between">
                                <a href="#"
                                    class="before:size-0 hover:before:size-20 relative inline-block w-56 w-max overflow-hidden rounded-sm border border-black bg-transparent px-2 py-1 opacity-0 duration-500 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-black before:transition-all before:duration-[1s] before:content-[''] after:absolute after:left-1/2 after:top-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:text-black after:transition-all after:duration-[1s] after:content-['Detail'] hover:after:text-white group-hover:opacity-100">
                                    Detail
                                </a>
                                <p
                                    class="opacity-0 duration-500 duration-500 group-hover:text-black group-hover:opacity-100">
                                    Rp. 10.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-offset="230" data-aos-duration="500"
                    class="group relative h-80 w-64 overflow-hidden rounded-md bg-white text-gray-50 shadow-[0_0_5px_rgba(0,0,0,.5)] duration-500">
                    <div class="">
                        <div class="relative h-60 w-full overflow-hidden rounded-t-md">
                            <div class="group">
                                <div class="image-container">
                                    <div class="h-60 w-full rounded-t-md bg-cover bg-center duration-500 group-hover:scale-110"
                                        style="background-image: url({{ asset('assets/img/Puncak_Ahuawali/1.jpeg') }})">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute -bottom-11 left-0 w-56 w-full p-5 py-5 duration-500 group-hover:-translate-y-10">
                            <div
                                class="absolute left-0 -z-10 h-28 w-64 border opacity-0 duration-500 group-hover:bg-white group-hover:opacity-100">
                            </div>
                            <span class="mt-3 inline-block text-lg font-bold text-black duration-500">Puncak Ahuawali</span>
                            <div class="mt-5 flex items-center justify-between">
                                <a href="#"
                                    class="before:size-0 hover:before:size-20 relative inline-block w-56 w-max overflow-hidden rounded-sm border border-black bg-transparent px-2 py-1 opacity-0 duration-500 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-black before:transition-all before:duration-[1s] before:content-[''] after:absolute after:left-1/2 after:top-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:text-black after:transition-all after:duration-[1s] after:content-['Detail'] hover:after:text-white group-hover:opacity-100">
                                    Detail
                                </a>
                                <p
                                    class="opacity-0 duration-500 duration-500 group-hover:text-black group-hover:opacity-100">
                                    Rp. 10.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-offset="230" data-aos-duration="500"
                    class="group relative h-80 w-64 overflow-hidden rounded-md bg-white text-gray-50 shadow-[0_0_5px_rgba(0,0,0,.5)] duration-500">
                    <div class="">
                        <div class="relative h-60 w-full overflow-hidden rounded-t-md">
                            <div class="group">
                                <div class="image-container">
                                    <div class="h-60 w-full rounded-t-md bg-cover bg-center duration-500 group-hover:scale-110"
                                        style="background-image: url({{ asset('assets/img/Puncak_Ahuawali/1.jpeg') }})">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="absolute -bottom-11 left-0 w-56 w-full p-5 py-5 duration-500 group-hover:-translate-y-10">
                            <div
                                class="absolute left-0 -z-10 h-28 w-64 border opacity-0 duration-500 group-hover:bg-white group-hover:opacity-100">
                            </div>
                            <span class="mt-3 inline-block text-lg font-bold text-black duration-500">Puncak Ahuawali</span>
                            <div class="mt-5 flex items-center justify-between">
                                <a href="#"
                                    class="before:size-0 hover:before:size-20 relative inline-block w-56 w-max overflow-hidden rounded-sm border border-black bg-transparent px-2 py-1 opacity-0 duration-500 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-black before:transition-all before:duration-[1s] before:content-[''] after:absolute after:left-1/2 after:top-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:text-black after:transition-all after:duration-[1s] after:content-['Detail'] hover:after:text-white group-hover:opacity-100">
                                    Detail
                                </a>
                                <p
                                    class="opacity-0 duration-500 duration-500 group-hover:text-black group-hover:opacity-100">
                                    Rp. 10.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-14 grid w-full place-items-center gap-3 p-3">
            <form action="" data-aos="fade-up" data-aos-duration="500" data-aos-offset="230"
                class="flex w-full max-w-[500px] flex-col rounded-md bg-white p-3 shadow-[0_0_15px_rgba(0,0,0,.1)]">
                @csrf
                <h2>Leave a Comment</h2>
                <p class="text-xs">Bantu kami untuk meningkatkan layanan kami.</p>

                <div class="mt-5 flex w-full flex-col gap-5">
                    <label for="nama" class="relative left-0 flex h-max w-full flex-col">
                        <input type="text" id="nama" name="nama" placeholder="" autocomplete="off"
                            class="peer w-full rounded-md border border-black/30 p-2">
                        <span
                            class="absolute -top-2 left-2 h-max w-max bg-white px-0.5 text-xs transition-[font,inset] peer-placeholder-shown:inset-y-2 peer-placeholder-shown:text-base peer-focus:-top-2 peer-focus:text-xs">Nama</span>
                    </label>
                    <label for="komentar" class="relative left-0 flex h-max w-full flex-col">
                        <textarea name="komentar" id="komentar" rows="5" placeholder=""
                            class="peer w-full rounded-md border border-black/30 p-2"></textarea>
                        <span
                            class="absolute -top-2 left-2 h-max w-max bg-white px-0.5 text-xs transition-[font,inset] peer-placeholder-shown:inset-y-2 peer-placeholder-shown:text-base peer-focus:-top-2 peer-focus:text-xs">Komentar</span>
                    </label>
                    <button type="submit" class="w-full rounded-md bg-black py-3 text-xs font-semibold text-white">Kirim
                        Komentar</button>
                </div>
            </form>
        </div>
    </main>

    @include('includes.footer')

    @push('script')
    @endpush
@endsection
