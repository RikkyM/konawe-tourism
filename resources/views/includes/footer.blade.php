<footer class="grid grid-cols-1 bg-[#091E40] p-5 text-white space-y-10 w-full">
    <div class="grid grid-cols-1 items-center gap-7 md:grid-cols-3 md:py-7 w-full max-w-[1024px] justify-self-center">
        <div class="mx-auto md:col-start-2">
            <img src="{{ asset('assets/logo/logo_footer.png') }}" alt="footer" class="w-full max-w-[80px] md:max-w-[130px]">
        </div>
        <div class="space-y-4 md:col-start-1 md:row-start-1">
            <h2 class="font-bold capitalize">konawe tourism</h2>
            <ul class="space-y-3 text-xs">
                <li class="border-b border-gray-500 pb-2"><a href="{{ route('homepage') }}" class="hover:text-teal-500 transition-all inline-block w-max">Home</a></li>
                <li class="border-b border-gray-500 pb-2"><a href="{{ route('destinasi') }}" class="hover:text-teal-500 transition-all inline-block w-max">Destinasi Wisata</a></li>
                <li><a href="{{ route('tentang-kami') }}" class="hover:text-teal-500 transition-all inline-block w-max">Tentang Kami</a></li>
            </ul>
        </div>
        <div class="space-y-4">
            <h2 class="font-bold capitalize">informasi kontak</h2>
            <ul class="space-y-3 text-xs">
                <li class="border-b border-gray-500 pb-2"><a href="https://api.whatsapp.com/send?phone=6285155407399"
                        class="flex items-center gap-2 hover:text-teal-500 transition-all inline-block w-max">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5"
                                    d="M15.6 14.521c-2.395 2.521-8.504-3.533-6.1-6.063c1.468-1.545-.19-3.31-1.108-4.609c-1.723-2.435-5.504.927-5.39 3.066c.363 6.746 7.66 14.74 14.726 14.042c2.21-.218 4.75-4.21 2.214-5.669c-1.267-.73-3.008-2.17-4.342-.767Z" />
                            </svg></span>
                        <span>+62-8515-5407-399</span></a></li>
                <li class="border-b border-gray-500 pb-2"><a href="mailto:konawetourism@gmail.com"
                        class="flex items-center gap-2 hover:text-teal-500 transition-all inline-block w-max">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 32 32">
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"
                                    d="M29 9v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9m26 0a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2m26 0l-11.862 8.212a2 2 0 0 1-2.276 0L3 9" />
                            </svg></span>
                        <span>konawetourism@gmail.com</span></a></li>
                <li><a href="#" class="flex items-center gap-2 hover:text-teal-500 transition-all inline-block w-max">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20">
                                <path fill="currentColor"
                                    d="M10 20S3 10.87 3 7a7 7 0 1 1 14 0c0 3.87-7 13-7 13zm0-11a2 2 0 1 0 0-4a2 2 0 0 0 0 4z" />
                            </svg></span>
                        <span>Lokasi</span></a></li>
            </ul>
        </div>
    </div>
    <div class="flex items-center justify-center">
        <h2 class="text-[8px] md:text-xs">&copy Copyright 2024. Made by Tim BDT24-FS043</h2>
    </div>
</footer>
