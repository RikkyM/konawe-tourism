<section class="my-3 flex h-full w-72 rounded-lg bg-white shadow-sm">
    <ul class="flex h-full w-full flex-col gap-3 px-3.5 py-6">
        <li>
            <a href="{{ route('dashboard') }}" wire:navigate
                class="@if (request()->is('dashboard')) bg-blue-500/30 font-semibold text-blue-600 @endif flex w-full items-center gap-5 rounded-md p-3 text-xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M13.5 9V4H20v5h-6.5ZM4 12V4h6.5v8H4Zm9.5 8v-8H20v8h-6.5ZM4 20v-5h6.5v5H4Z" />
                </svg>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('wisata') }}" wire:navigate
                class="@if (request()->is('wisata')) bg-blue-500/30 font-semibold text-blue-600 @endif flex w-full items-center gap-5 rounded-md p-3 text-xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="1.5">
                        <path d="M12 21.5a9.5 9.5 0 1 0 0-19a9.5 9.5 0 0 0 0 19" />
                        <path
                            d="m7.778 16.222l1.942-5.837a1.056 1.056 0 0 1 .675-.665l5.827-1.942l-1.942 5.837a1.055 1.055 0 0 1-.665.665z" />
                    </g>
                </svg>
                <span>Wisata</span>
            </a>
        </li>
        <li>
            <a href="{{ route('komentar') }}" wire:navigate
                class="@if (request()->is('komentar')) bg-blue-500/30 font-semibold text-blue-600 @endif flex w-full items-center gap-5 rounded-md p-3 text-xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M13.5 9V4H20v5h-6.5ZM4 12V4h6.5v8H4Zm9.5 8v-8H20v8h-6.5ZM4 20v-5h6.5v5H4Z" />
                </svg>
                <span>Komentar</span>
            </a>
        </li>
    </ul>
</section>
