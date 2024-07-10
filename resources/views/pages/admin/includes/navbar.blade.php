<header class="w-full">
    <nav class="flex h-20 w-full items-center overflow-hidden rounded-lg bg-white shadow-sm">
        <div class="flex h-full w-60 items-center justify-center">
            <img src="{{ asset('assets/logo/logo_footer.png') }}" alt="logo" class="h-[80%] bg-cover bg-center">
        </div>
        <div class="flex h-full flex-1 items-center justify-between px-5">
            <div class="flex flex-col gap-1 capitalize">
                <div class="flex items-center gap-1.5">
                    @if (!empty($breadcrumbs))
                        @foreach ($breadcrumbs as $item)
                            @if ($loop->last)
                                <span class="font-bold">{{ $item['name'] }}</span>
                            @else
                                <a href="{{ $item['url'] }}" class="text-[#8BD0DB]">{{ $item['name'] }}</a>
                                <span> / </span>
                            @endif
                        @endforeach
                    @endif
                </div>
                <span class="text-xl font-bold capitalize">{{ $title }}</span>
            </div>
            <div
                class="flex items-center gap-3 rounded-md px-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 448 512">
                    <path fill="currentColor"
                        d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z" />
                </svg>
                <a href="{{ route('logout') }}" class="font-bold hover:text-red-500 transition-colors">Sign Out</a>
            </div>
        </div>
    </nav>
</header>
