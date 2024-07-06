@extends('app')
@section('title')
    Tentang Kami
@endsection
@section('pages')
    @include('includes.navbar')
    <main>
        @include('includes.hero')
        <div class="mx-auto flex w-full max-w-[1052px] gap-1 p-10 p-2 text-xs sm:text-sm">
            <a href="{{ route('homepage') }}" class="text-[#17A2B8]">Home</a>/<span
                class="@if (request()->is('tentang-kami')) font-semibold @endif">Tentang Kami</span>
        </div>

        <div class="mt-2 grid w-full place-items-center gap-3 p-3">
            <h2 class="w-48 text-center font-bold sm:text-lg md:w-max lg:text-2xl">Tentang Kami</h2>
            <figure
                class="flex w-[90%] flex-col p-3 md:max-w-3xl md:flex-row-reverse md:items-center md:justify-evenly md:gap-5 lg:w-full lg:max-w-5xl">
                <img src="{{ asset('assets/logo/logo_header.png') }}" alt="gambar-1"
                    class="mx-auto my-4 max-w-[150px] md:mx-0 lg:max-w-[300px]">
                <figcaption class="mt-4 flex flex-col gap-4 md:h-full md:gap-5">
                    <h2 class="font-semibold md:text-lg lg:text-xl">KonaweTourism.com Adalah</h2>
                    <p class="text-sm md:w-80 md:text-sm">Sebuah website proyek Pariwisata yang di kerjakan oleh sebuah
                        tim ber anggotakan 3 orang yang berdedikasi penuh untuk meningkatkan potensi wisata daerah Konawe
                        Selatan dan dengan adanya website ini diharapkan dapat menjadi media promosi yang efektif untuk
                        menarik wisatawan dan mendorong pertumbuhan ekonomi lokal.</p>
                    <p class="text-sm font-bold md:w-80 md:text-sm">KonaweTourism.com sepenuhnya berdedikasi untuk
                        mempermudah perencanaan perjalanan terbaik Anda di Konawe Selatan.</p>
                </figcaption>
            </figure>
        </div>

        <div class="my-14">
            <div class="text-center" data-aos="fade-up" data-aos-duration="500" data-aos-offset="230">
                <h2 class="font-bold sm:text-lg lg:text-2xl">Meet the Team</h2>
                <p class="text-[10px] sm:text-xs lg:text-sm">Tim Kami Siap Membantu Anda</p>
            </div>
            <div
                class="flex w-full flex-col items-center gap-5 py-10 sm:flex-row sm:justify-center sm:gap-2.5 sm:gap-7 md:gap-5 lg:gap-14">
                <div class="order-2 sm:order-1" data-aos="fade-up" data-aos-duration="500" data-aos-offset="230">
                    <div
                        class="size-52 group relative rounded border border-black/10 bg-[#8DA7A5] shadow-md transition-all hover:mb-20 sm:hover:mb-0">
                        <img src="{{ asset('assets/img/team/alim.png') }}" alt=""
                            class="absolute bottom-0 left-7 z-10 w-36 origin-bottom transform-gpu transition-transform group-hover:translate-x-4 group-hover:scale-[1.15]">
                        <div
                            class="absolute -bottom-[78px] left-1/2 flex w-max -translate-x-1/2 flex-col text-center opacity-0 transition-all group-hover:opacity-100">
                            <span class="text-xl font-bold uppercase text-[#264240]">Muhammad</span>
                            <span class="text-xl font-bold uppercase text-[#264240]">Nur Alim</span>
                            <span class="text-sm uppercase text-[#264240]">Front-End Developer</span>
                        </div>
                        <div
                            class="pointer-events-none absolute left-2 top-1/2 z-10 flex -translate-y-1/2 flex-col items-center justify-center gap-4 opacity-0 transition-all group-hover:pointer-events-auto group-hover:opacity-100">
                            <a href="#">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        class="text-[#264240] transition duration-300 hover:text-black"
                                        viewBox="0 0 432 416">
                                        <path fill="currentColor"
                                            d="M213.5 0q88.5 0 151 62.5T427 213q0 70-41 125.5T281 416q-14 2-14-11v-58q0-27-15-40q44-5 70.5-27t26.5-77q0-34-22-58q11-26-2-57q-18-5-58 22q-26-7-54-7t-53 7q-18-12-32.5-17.5T107 88h-6q-12 31-2 57q-22 24-22 58q0 55 27 77t70 27q-11 10-13 29q-42 18-62-18q-12-20-33-22q-2 0-4.5.5t-5 3.5t8.5 9q14 7 23 31q1 2 2 4.5t6.5 9.5t13 10.5T130 371t30-2v36q0 13-14 11q-64-22-105-77.5T0 213q0-88 62.5-150.5T213.5 0z" />
                                    </svg></span>
                            </a>
                            <a href="#" class="group/ig">
                                <svg class="h-[23px] w-[23px] fill-current text-[#264240] transition duration-300 group-hover/ig:text-pink-600"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M17.34 5.46a1.2 1.2 0 1 0 1.2 1.2a1.2 1.2 0 0 0-1.2-1.2Zm4.6 2.42a7.59 7.59 0 0 0-.46-2.43a4.94 4.94 0 0 0-1.16-1.77a4.7 4.7 0 0 0-1.77-1.15a7.3 7.3 0 0 0-2.43-.47C15.06 2 14.72 2 12 2s-3.06 0-4.12.06a7.3 7.3 0 0 0-2.43.47a4.78 4.78 0 0 0-1.77 1.15a4.7 4.7 0 0 0-1.15 1.77a7.3 7.3 0 0 0-.47 2.43C2 8.94 2 9.28 2 12s0 3.06.06 4.12a7.3 7.3 0 0 0 .47 2.43a4.7 4.7 0 0 0 1.15 1.77a4.78 4.78 0 0 0 1.77 1.15a7.3 7.3 0 0 0 2.43.47C8.94 22 9.28 22 12 22s3.06 0 4.12-.06a7.3 7.3 0 0 0 2.43-.47a4.7 4.7 0 0 0 1.77-1.15a4.85 4.85 0 0 0 1.16-1.77a7.59 7.59 0 0 0 .46-2.43c0-1.06.06-1.4.06-4.12s0-3.06-.06-4.12ZM20.14 16a5.61 5.61 0 0 1-.34 1.86a3.06 3.06 0 0 1-.75 1.15a3.19 3.19 0 0 1-1.15.75a5.61 5.61 0 0 1-1.86.34c-1 .05-1.37.06-4 .06s-3 0-4-.06a5.73 5.73 0 0 1-1.94-.3a3.27 3.27 0 0 1-1.1-.75a3 3 0 0 1-.74-1.15a5.54 5.54 0 0 1-.4-1.9c0-1-.06-1.37-.06-4s0-3 .06-4a5.54 5.54 0 0 1 .35-1.9A3 3 0 0 1 5 5a3.14 3.14 0 0 1 1.1-.8A5.73 5.73 0 0 1 8 3.86c1 0 1.37-.06 4-.06s3 0 4 .06a5.61 5.61 0 0 1 1.86.34a3.06 3.06 0 0 1 1.19.8a3.06 3.06 0 0 1 .75 1.1a5.61 5.61 0 0 1 .34 1.9c.05 1 .06 1.37.06 4s-.01 3-.06 4ZM12 6.87A5.13 5.13 0 1 0 17.14 12A5.12 5.12 0 0 0 12 6.87Zm0 8.46A3.33 3.33 0 1 1 15.33 12A3.33 3.33 0 0 1 12 15.33Z" />
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="fill-current text-[#264240] transition duration-300 hover:text-[#0A66C2]"
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 56 56">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M45.608 45.607h-7.415V34.002c0-2.766-.048-6.326-3.853-6.326c-3.86 0-4.449 3.015-4.449 6.129v11.802h-7.407V21.745h7.108v3.263h.103c.99-1.877 3.409-3.855 7.016-3.855c7.51 0 8.897 4.94 8.897 11.367zM14.123 18.485a4.299 4.299 0 0 1-4.303-4.301a4.3 4.3 0 0 1 8.6 0a4.3 4.3 0 0 1-4.297 4.301m-3.714 27.122h7.423V21.745H10.41zM49.3 3H6.688C4.653 3 3 4.614 3 6.606v42.787c0 1.992 1.653 3.608 3.688 3.608H49.3c2.04 0 3.699-1.616 3.699-3.608V6.606C53 4.614 51.34 3 49.301 3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="order-1 sm:order-2" data-aos="fade-up" data-aos-duration="500" data-aos-offset="230">
                    <div
                        class="size-52 group relative rounded border border-black/10 bg-[#8DA7A5] shadow-md transition-all hover:mb-14 sm:hover:mb-0">
                        <img src="{{ asset('assets/img/team/rikky.png') }}" alt=""
                            class="absolute bottom-0 z-10 origin-bottom transform-gpu transition-transform group-hover:translate-x-5 group-hover:scale-[1.15]">
                        <div
                            class="absolute -bottom-[50px] left-1/2 flex w-max -translate-x-1/2 flex-col text-center opacity-0 transition-all group-hover:opacity-100">
                            <span class="text-xl font-bold uppercase text-[#264240]">Rikky Mahendra</span>
                            <span class="text-sm uppercase text-[#264240]">Fullstack Developer</span>
                        </div>
                        <div
                            class="pointer-events-none absolute left-2 top-1/2 z-10 flex -translate-y-1/2 flex-col items-center justify-center gap-4 opacity-0 transition-all group-hover:pointer-events-auto group-hover:opacity-100">
                            <a href="#">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        class="text-[#264240] transition duration-300 hover:text-black"
                                        viewBox="0 0 432 416">
                                        <path fill="currentColor"
                                            d="M213.5 0q88.5 0 151 62.5T427 213q0 70-41 125.5T281 416q-14 2-14-11v-58q0-27-15-40q44-5 70.5-27t26.5-77q0-34-22-58q11-26-2-57q-18-5-58 22q-26-7-54-7t-53 7q-18-12-32.5-17.5T107 88h-6q-12 31-2 57q-22 24-22 58q0 55 27 77t70 27q-11 10-13 29q-42 18-62-18q-12-20-33-22q-2 0-4.5.5t-5 3.5t8.5 9q14 7 23 31q1 2 2 4.5t6.5 9.5t13 10.5T130 371t30-2v36q0 13-14 11q-64-22-105-77.5T0 213q0-88 62.5-150.5T213.5 0z" />
                                    </svg></span>
                            </a>
                            <a href="#" class="group/ig">
                                <svg class="h-[23px] w-[23px] fill-current text-[#264240] transition duration-300 group-hover/ig:text-pink-600"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M17.34 5.46a1.2 1.2 0 1 0 1.2 1.2a1.2 1.2 0 0 0-1.2-1.2Zm4.6 2.42a7.59 7.59 0 0 0-.46-2.43a4.94 4.94 0 0 0-1.16-1.77a4.7 4.7 0 0 0-1.77-1.15a7.3 7.3 0 0 0-2.43-.47C15.06 2 14.72 2 12 2s-3.06 0-4.12.06a7.3 7.3 0 0 0-2.43.47a4.78 4.78 0 0 0-1.77 1.15a4.7 4.7 0 0 0-1.15 1.77a7.3 7.3 0 0 0-.47 2.43C2 8.94 2 9.28 2 12s0 3.06.06 4.12a7.3 7.3 0 0 0 .47 2.43a4.7 4.7 0 0 0 1.15 1.77a4.78 4.78 0 0 0 1.77 1.15a7.3 7.3 0 0 0 2.43.47C8.94 22 9.28 22 12 22s3.06 0 4.12-.06a7.3 7.3 0 0 0 2.43-.47a4.7 4.7 0 0 0 1.77-1.15a4.85 4.85 0 0 0 1.16-1.77a7.59 7.59 0 0 0 .46-2.43c0-1.06.06-1.4.06-4.12s0-3.06-.06-4.12ZM20.14 16a5.61 5.61 0 0 1-.34 1.86a3.06 3.06 0 0 1-.75 1.15a3.19 3.19 0 0 1-1.15.75a5.61 5.61 0 0 1-1.86.34c-1 .05-1.37.06-4 .06s-3 0-4-.06a5.73 5.73 0 0 1-1.94-.3a3.27 3.27 0 0 1-1.1-.75a3 3 0 0 1-.74-1.15a5.54 5.54 0 0 1-.4-1.9c0-1-.06-1.37-.06-4s0-3 .06-4a5.54 5.54 0 0 1 .35-1.9A3 3 0 0 1 5 5a3.14 3.14 0 0 1 1.1-.8A5.73 5.73 0 0 1 8 3.86c1 0 1.37-.06 4-.06s3 0 4 .06a5.61 5.61 0 0 1 1.86.34a3.06 3.06 0 0 1 1.19.8a3.06 3.06 0 0 1 .75 1.1a5.61 5.61 0 0 1 .34 1.9c.05 1 .06 1.37.06 4s-.01 3-.06 4ZM12 6.87A5.13 5.13 0 1 0 17.14 12A5.12 5.12 0 0 0 12 6.87Zm0 8.46A3.33 3.33 0 1 1 15.33 12A3.33 3.33 0 0 1 12 15.33Z" />
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="fill-current text-[#264240] transition duration-300 hover:text-[#0A66C2]"
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 56 56">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M45.608 45.607h-7.415V34.002c0-2.766-.048-6.326-3.853-6.326c-3.86 0-4.449 3.015-4.449 6.129v11.802h-7.407V21.745h7.108v3.263h.103c.99-1.877 3.409-3.855 7.016-3.855c7.51 0 8.897 4.94 8.897 11.367zM14.123 18.485a4.299 4.299 0 0 1-4.303-4.301a4.3 4.3 0 0 1 8.6 0a4.3 4.3 0 0 1-4.297 4.301m-3.714 27.122h7.423V21.745H10.41zM49.3 3H6.688C4.653 3 3 4.614 3 6.606v42.787c0 1.992 1.653 3.608 3.688 3.608H49.3c2.04 0 3.699-1.616 3.699-3.608V6.606C53 4.614 51.34 3 49.301 3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="order-3" data-aos="fade-up" data-aos-duration="500" data-aos-offset="230">
                    <div class="size-52 group relative rounded border border-black/10 bg-[#8DA7A5] shadow-md transition-all hover:mb-14 sm:hover:mb-0"
                        data-aos="fade-up" data-aos-duration="500" data-aos-offset="230">
                        <img src="{{ asset('assets/img/team/fadil.png') }}" alt=""
                            class="absolute bottom-0 left-2 z-10 w-48 origin-bottom transform-gpu transition-transform group-hover:translate-x-4 group-hover:scale-[1.15]">
                        <div
                            class="absolute -bottom-[77px] left-1/2 flex w-max -translate-x-1/2 flex-col text-center opacity-0 transition-all group-hover:opacity-100">
                            <span class="text-xl font-bold uppercase text-[#264240]">Ahmad Fadlilah</span>
                            <span class="text-xl font-bold uppercase text-[#264240]">Ramadlan</span>
                            <span class="text-sm uppercase text-[#264240]">UI/UX Designer</span>
                        </div>
                        <div
                            class="pointer-events-none absolute left-2 top-1/2 z-10 flex -translate-y-1/2 flex-col items-center justify-center gap-4 opacity-0 transition-all group-hover:pointer-events-auto group-hover:opacity-100">
                            <a href="#">
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        class="text-[#264240] transition duration-300 hover:text-black" viewBox="0 0 432 416">
                                        <path fill="currentColor"
                                            d="M213.5 0q88.5 0 151 62.5T427 213q0 70-41 125.5T281 416q-14 2-14-11v-58q0-27-15-40q44-5 70.5-27t26.5-77q0-34-22-58q11-26-2-57q-18-5-58 22q-26-7-54-7t-53 7q-18-12-32.5-17.5T107 88h-6q-12 31-2 57q-22 24-22 58q0 55 27 77t70 27q-11 10-13 29q-42 18-62-18q-12-20-33-22q-2 0-4.5.5t-5 3.5t8.5 9q14 7 23 31q1 2 2 4.5t6.5 9.5t13 10.5T130 371t30-2v36q0 13-14 11q-64-22-105-77.5T0 213q0-88 62.5-150.5T213.5 0z" />
                                    </svg></span>
                            </a>
                            <a href="#" class="group/ig">
                                <svg class="h-[23px] w-[23px] fill-current text-[#264240] transition duration-300 group-hover/ig:text-pink-600"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M17.34 5.46a1.2 1.2 0 1 0 1.2 1.2a1.2 1.2 0 0 0-1.2-1.2Zm4.6 2.42a7.59 7.59 0 0 0-.46-2.43a4.94 4.94 0 0 0-1.16-1.77a4.7 4.7 0 0 0-1.77-1.15a7.3 7.3 0 0 0-2.43-.47C15.06 2 14.72 2 12 2s-3.06 0-4.12.06a7.3 7.3 0 0 0-2.43.47a4.78 4.78 0 0 0-1.77 1.15a4.7 4.7 0 0 0-1.15 1.77a7.3 7.3 0 0 0-.47 2.43C2 8.94 2 9.28 2 12s0 3.06.06 4.12a7.3 7.3 0 0 0 .47 2.43a4.7 4.7 0 0 0 1.15 1.77a4.78 4.78 0 0 0 1.77 1.15a7.3 7.3 0 0 0 2.43.47C8.94 22 9.28 22 12 22s3.06 0 4.12-.06a7.3 7.3 0 0 0 2.43-.47a4.7 4.7 0 0 0 1.77-1.15a4.85 4.85 0 0 0 1.16-1.77a7.59 7.59 0 0 0 .46-2.43c0-1.06.06-1.4.06-4.12s0-3.06-.06-4.12ZM20.14 16a5.61 5.61 0 0 1-.34 1.86a3.06 3.06 0 0 1-.75 1.15a3.19 3.19 0 0 1-1.15.75a5.61 5.61 0 0 1-1.86.34c-1 .05-1.37.06-4 .06s-3 0-4-.06a5.73 5.73 0 0 1-1.94-.3a3.27 3.27 0 0 1-1.1-.75a3 3 0 0 1-.74-1.15a5.54 5.54 0 0 1-.4-1.9c0-1-.06-1.37-.06-4s0-3 .06-4a5.54 5.54 0 0 1 .35-1.9A3 3 0 0 1 5 5a3.14 3.14 0 0 1 1.1-.8A5.73 5.73 0 0 1 8 3.86c1 0 1.37-.06 4-.06s3 0 4 .06a5.61 5.61 0 0 1 1.86.34a3.06 3.06 0 0 1 1.19.8a3.06 3.06 0 0 1 .75 1.1a5.61 5.61 0 0 1 .34 1.9c.05 1 .06 1.37.06 4s-.01 3-.06 4ZM12 6.87A5.13 5.13 0 1 0 17.14 12A5.12 5.12 0 0 0 12 6.87Zm0 8.46A3.33 3.33 0 1 1 15.33 12A3.33 3.33 0 0 1 12 15.33Z" />
                                </svg>
                            </a>
                            <a href="#">
                                <svg class="fill-current text-[#264240] transition duration-300 hover:text-[#0A66C2]"
                                    xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 56 56">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M45.608 45.607h-7.415V34.002c0-2.766-.048-6.326-3.853-6.326c-3.86 0-4.449 3.015-4.449 6.129v11.802h-7.407V21.745h7.108v3.263h.103c.99-1.877 3.409-3.855 7.016-3.855c7.51 0 8.897 4.94 8.897 11.367zM14.123 18.485a4.299 4.299 0 0 1-4.303-4.301a4.3 4.3 0 0 1 8.6 0a4.3 4.3 0 0 1-4.297 4.301m-3.714 27.122h7.423V21.745H10.41zM49.3 3H6.688C4.653 3 3 4.614 3 6.606v42.787c0 1.992 1.653 3.608 3.688 3.608H49.3c2.04 0 3.699-1.616 3.699-3.608V6.606C53 4.614 51.34 3 49.301 3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    @include('includes.footer')
@endsection
