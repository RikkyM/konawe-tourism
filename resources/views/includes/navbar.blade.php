<header class="absolute sticky top-0 z-50 h-20 w-full bg-white">
    <nav class="relative flex h-full w-full items-center justify-between px-5">
        <img src="{{ asset('assets/logo/logo_header.png') }}" alt="logo" class="w-20 md:w-32">
        <ul class="hidden items-center space-x-4 md:flex md:text-[16px] lg:text-base">
            <li><a href="{{ route('homepage') }}" class="@if (request()->is('home')) font-bold @endif">Home</a></li>
            <li><a href="{{ route('destinasi') }}" class="@if (request()->is('destinasi-wisata')) font-bold @endif">Destinasi
                    Wisata</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#"
                    class="before:size-0 hover:before:size-20 relative inline-block w-max rounded-sm bg-blue-500 px-2 py-1 text-base font-semibold text-white before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-white/20 before:transition-[height,width] before:duration-[.5s] before:content-['']">Login</a>
            </li>
        </ul>
        <div id="menu-btn" class="group cursor-pointer space-y-2 md:hidden">
            <div id="line-1" class="h-0.5 w-6 rounded-md bg-black transition duration-300"></div>
            <div id="line-2" class="h-0.5 w-6 rounded-md bg-black transition duration-300"></div>
            <div id="line-3" class="h-0.5 w-6 rounded-md bg-black transition duration-300"></div>
            <ul id="menu"
                class="pointer-events-none absolute left-0 top-16 z-50 w-screen cursor-default flex-col items-start justify-end space-y-5 text-white bg-gray-500/65 p-4 opacity-0 backdrop-blur-sm transition-all duration-150 md:hidden">
                <li><a href="{{ route('homepage') }}"
                        class="@if (request()->is('home')) font-bold before:content-[''] before:absolute before:-bottom-0.5 before:w-20 before:h-0.5 before:bg-[#3CB1C3] @endif relative inline-block w-full">Home</a>
                </li>
                <li><a href="{{ route('destinasi') }}"
                        class="@if (request()->is('destinasi-wisata')) font-bold before:content-[''] before:absolute before:-bottom-0.5 before:w-36 before:h-0.5 before:bg-[#3CB1C3] @endif relative inline-block w-full">Destinasi
                        Wisata</a></li>
                <li><a href="#" class="inline-block w-full">Tentang Kami</a></li>
                <li><a href="#"
                        class="inline-block w-max rounded-md bg-blue-500 px-2 py-1 font-semibold text-white">Login</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<script>
    document.getElementById('menu-btn').addEventListener('click', function() {
        const lines = this.children;
        lines[0].classList.toggle('rotate-45');
        lines[0].classList.toggle('translate-y-3');

        lines[1].classList.toggle('opacity-0');

        lines[2].classList.toggle('-rotate-45');
        lines[2].classList.toggle('-translate-y-2');

        lines[3].classList.toggle('opacity-0')
        if (lines[3].classList.contains('top-16')) {
            lines[3].classList.add('top-[72px]');
            lines[3].classList.add('pointer-events-auto');
            lines[3].classList.remove('pointer-events-none');
            lines[3].classList.remove('top-16');
        } else {
            lines[3].classList.add('top-16');
            lines[3].classList.add('pointer-events-none');
            lines[3].classList.remove('pointer-events-auto');
            lines[3].classList.remove('top-[72px]');
        }
    });
</script>
