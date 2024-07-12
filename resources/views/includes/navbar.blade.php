<header class="fixed top-0 z-50 h-20 w-full bg-white">
    <nav class="relative flex h-full w-full items-center justify-between px-5">
        <img src="{{ asset('assets/logo/logo_header.png') }}" alt="logo" class="w-20 md:w-32">
        <ul class="hidden items-center space-x-4 md:flex md:text-[16px] lg:text-base">
            <li><a href="{{ route('homepage') }}" class="@if (request()->routeIs('homepage')) font-bold @endif">Home</a></li>
            <li><a href="{{ route('destinasi') }}" class="@if (request()->is('destinasi-wisata')) font-bold @endif">Destinasi
                    Wisata</a></li>
            <li><a href="{{ route('tentang-kami') }}" class="@if (request()->is('tentang-kami')) font-bold @endif">Tentang
                    Kami</a></li>
            <li>
                @if (Auth::check())
                    <a href="{{ route('dashboard') }}" class="w-max rounded-md bg-blue-500 px-2 py-1 font-semibold text-white">{{ Auth::user()->name }}</a>
                @else
                <a href="{{ route('login') }}"
                    class="before:size-0 hover:before:size-20 relative inline-block w-max rounded-sm bg-blue-500 px-2 py-1 text-base font-semibold text-white before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-white/20 before:transition-[height,width] before:duration-[.5s] before:content-['']">Login</a>
                @endif
            </li>
        </ul>
        <div id="menu-btn" class="group cursor-pointer space-y-2 md:hidden">
            <div id="line-1" class="h-0.5 w-6 rounded-md bg-black transition duration-300"></div>
            <div id="line-2" class="h-0.5 w-6 rounded-md bg-black transition duration-300"></div>
            <div id="line-3" class="h-0.5 w-6 rounded-md bg-black transition duration-300"></div>
            <ul id="menu"
                class="bg-gray-500/65 pointer-events-none absolute left-0 top-16 z-50 w-screen cursor-default flex-col items-start justify-end space-y-5 p-4 text-white opacity-0 backdrop-blur-sm transition-all duration-150 md:hidden">
                <li class="w-max"><a href="{{ route('homepage') }}"
                        class="@if (request()->routeIs('homepage')) font-bold before:content-[''] before:absolute before:-bottom-0.5 before:w-20 before:h-0.5 before:bg-[#3CB1C3] @endif relative inline-block w-max">Home</a>
                </li>
                <li class="w-max"><a href="{{ route('destinasi') }}"
                        class="@if (request()->is('destinasi-wisata')) font-bold before:content-[''] before:absolute before:-bottom-0.5 before:w-36 before:h-0.5 before:bg-[#3CB1C3] @endif relative inline-block w-max">Destinasi
                        Wisata</a></li>
                <li class="w-max"><a href="{{ route('tentang-kami') }}"
                        class="@if (request()->is('tentang-kami')) font-bold before:content-[''] before:absolute before:-bottom-0.5 before:w-32 before:h-0.5 before:bg-[#3CB1C3] @endif relative inline-block w-max">Tentang
                        Kami</a>
                </li>
                <li class="w-max">
                    @if (Auth::check())
                        <a href="{{ route('dashboard') }}" class="w-max rounded-md bg-blue-500 px-2 py-1 font-semibold text-white">{{ Auth::user()->name }}</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="inline-block w-max rounded-md bg-blue-500 px-2 py-1 font-semibold text-white">Login</a>
                    @endif
                </li>
            </ul>
        </div>
    </nav>
</header>

<script>
    const menuBtn = document.querySelector('#menu-btn')

    menuBtn.addEventListener('click', function() {
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

    const menu = document.querySelector('#menu');

    menu.addEventListener('click', e => {
        e.stopPropagation();
    });

    document.addEventListener('click', e => {
        if (!menuBtn.contains(e.target)) {
            menu.classList.remove('pointer-events-auto', 'top-[72px]')
            menu.classList.add('top-16', 'pointer-events-none', 'opacity-0');

            const lines = menuBtn.children;

            lines[0].classList.remove('rotate-45', 'translate-y-3');
            lines[1].classList.remove('opacity-0');
            lines[2].classList.remove('-rotate-45', '-translate-y-2');
        }
    })
</script>
