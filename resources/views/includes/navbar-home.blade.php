<header class="h-20 w-full bg-white">
    <nav class="relative flex h-full w-full items-center justify-between px-5">
        <img src="{{ asset('assets/logo/logo.png') }}" alt="logo" class="w-20 md:w-32">
        <ul class="hidden space-x-4 md:flex md:text-[16px] lg:text-lg">
            <li><a href="{{ route('homepage') }}" class="@if (request()->is('home')) font-bold @endif">Home</a></li>
            <li><a href="#">Destinasi Wisata</a></li>
            <li><a href="#">Tentang Kami</a></li>
        </ul>
        <div id="menu-btn" class="group cursor-pointer space-y-2 md:hidden">
            <div id="line-1" class="h-0.5 w-6 rounded-md bg-black transition duration-300"></div>
            <div id="line-2" class="h-0.5 w-6 rounded-md bg-black transition duration-300"></div>
            <div id="line-3" class="h-0.5 w-6 rounded-md bg-black transition duration-300"></div>
            <ul id="menu"
                class="pointer-events-none absolute left-0 top-16 z-50 w-screen cursor-default flex-col items-start justify-end space-y-5 bg-[#D8D7D3] p-4 opacity-0 transition-all duration-150 md:hidden">
                <li><a href="{{ route('homepage') }}"
                        class="@if (request()->is('home')) font-bold before:content-[''] before:absolute before:-bottom-0.5 before:w-20 before:h-0.5 before:bg-[#4D869C] @endif relative inline-block w-full">Home</a>
                </li>
                <li><a href="#" class="inline-block w-full">Destinasi Wisata</a></li>
                <li><a href="#" class="inline-block w-full">Tentang Kami</a></li>
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
