<section class="my-3 flex h-full w-72 rounded-lg bg-white shadow-sm">
    <ul class="flex h-full w-full flex-col gap-3 px-3.5 py-6">
        <li>
            <a href="{{ route('dashboard') }}" wire:navigate
                class="@if (request()->routeIs('dashboard')) bg-blue-500/30 font-semibold text-blue-600 @endif flex w-full items-center gap-5 rounded-md p-3 text-xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M13.5 9V4H20v5h-6.5ZM4 12V4h6.5v8H4Zm9.5 8v-8H20v8h-6.5ZM4 20v-5h6.5v5H4Z" />
                </svg>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('wisata') }}" wire:navigate
                class="@if (request()->routeIs('wisata')) bg-blue-500/30 font-semibold text-blue-600 @endif flex w-full items-center gap-5 rounded-md p-3 text-xl">
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
                class="@if (request()->routeIs('komentar')) bg-blue-500/30 font-semibold text-blue-600 @endif flex w-full items-center gap-5 rounded-md p-3 text-xl">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <g fill="none">
                        <path fill="currentColor"
                            d="m4.327 6.638l.891.454zm.441 13.594l-.707-.707zm13.594-3.559l.454.891zm1.311-1.311l.891.454zm0-8.724l.891-.454zm-1.311-1.311l.454-.891zm-12.724 0l.454.891zm2.07 11.966L7 16.586zM5 9.8c0-.857 0-1.439.038-1.889c.035-.438.1-.663.18-.819l-1.782-.908c-.247.485-.346 1.002-.392 1.564C3 8.298 3 8.976 3 9.8zM5 12V9.8H3V12zm-2 0v5h2v-5zm0 5v2.914h2V17zm0 2.914c0 1.291 1.562 1.938 2.475 1.025l-1.414-1.414a.55.55 0 0 1 .939.389zm2.475 1.025L8.415 18L7 16.586l-2.939 2.939zM15.2 16H8.414v2H15.2zm2.708-.218c-.156.08-.38.145-.819.18c-.45.037-1.032.038-1.889.038v2c.824 0 1.501 0 2.052-.044c.562-.046 1.079-.145 1.564-.392zm.874-.874a2 2 0 0 1-.874.874l.908 1.782a4 4 0 0 0 1.748-1.748zM19 12.2c0 .857 0 1.439-.038 1.889c-.035.438-.1.663-.18.819l1.782.908c.247-.485.346-1.002.392-1.564c.045-.55.044-1.228.044-2.052zm0-2.4v2.4h2V9.8zm-.218-2.708c.08.156.145.38.18.819C19 8.361 19 8.943 19 9.8h2c0-.824 0-1.501-.044-2.052c-.046-.562-.145-1.079-.392-1.564zm-.874-.874a2 2 0 0 1 .874.874l1.782-.908a4 4 0 0 0-1.748-1.748zM15.2 6c.857 0 1.439 0 1.889.038c.438.035.663.1.819.18l.908-1.782c-.485-.247-1.002-.346-1.564-.392C16.702 4 16.024 4 15.2 4zM8.8 6h6.4V4H8.8zm-2.708.218c.156-.08.38-.145.819-.18C7.361 6 7.943 6 8.8 6V4c-.824 0-1.501 0-2.052.044c-.562.046-1.079.145-1.564.392zm-.874.874a2 2 0 0 1 .874-.874l-.908-1.782a4 4 0 0 0-1.748 1.748zM8.414 18v-2A2 2 0 0 0 7 16.586z" />
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 9h8m-8 4h5" />
                    </g>
                </svg>
                <span>Komentar</span>
            </a>
        </li>
    </ul>
</section>
