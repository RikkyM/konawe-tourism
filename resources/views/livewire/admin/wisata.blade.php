<div class="h-full overflow-auto bg-white">
    <div class="fixed left-1/2 top-14 z-50 flex -translate-x-1/2 flex-col gap-3">
        <div id="notif" wire:ignore.self
            class="pointer-events-none -translate-y-7 rounded-md bg-green-500 p-3 font-semibold text-white opacity-0 transition-all duration-300">
            Berhasil menambah kategori
        </div>
    </div>

    <div class="fixed left-1/2 top-14 z-50 flex -translate-x-1/2 flex-col gap-3">
        <div id="notifEdit" wire:ignore.self
            class="pointer-events-none -translate-y-7 rounded-md bg-green-500 p-3 font-semibold text-white opacity-0 transition-all duration-300">
            Kategori berhasil diubah
        </div>
    </div>

    <div class="fixed left-1/2 top-14 z-50 flex -translate-x-1/2 flex-col gap-3">
        <div id="wisata" wire:ignore.self
            class="pointer-events-none -translate-y-7 rounded-md bg-green-500 p-3 font-semibold text-white opacity-0 transition-all duration-300">
            Berhasil menambah wisata
        </div>
    </div>

    <div class="fixed left-1/2 top-14 z-50 flex -translate-x-1/2 flex-col gap-3">
        <div id="wisataEdit" wire:ignore.self
            class="pointer-events-none -translate-y-7 rounded-md bg-green-500 p-3 font-semibold text-white opacity-0 transition-all duration-300">
            Wisata berhasil diubah
        </div>
    </div>

    <div class="fixed left-1/2 top-14 z-50 flex -translate-x-1/2 flex-col gap-3">
        <div id="deleteNotif" wire:ignore.self
            class="pointer-events-none -translate-y-7 rounded-md bg-green-500 p-3 font-semibold text-white opacity-0 transition-all duration-300">
            Wisata berhasil dihapus
        </div>
    </div>

    <div class="fixed left-1/2 top-14 z-50 flex -translate-x-1/2 flex-col gap-3">
        <div id="addSarana" wire:ignore.self
            class="pointer-events-none -translate-y-7 rounded-md bg-green-500 p-3 font-semibold text-white opacity-0 transition-all duration-300">
            Berhasil menambah sarana
        </div>
    </div>

    <section class="h-full overflow-auto">
        <section class="sticky top-0 z-20 flex items-center justify-between bg-white p-2">
            <label for="search"
                class="flex items-center gap-2 rounded-md border border-gray-500/50 bg-white p-1 px-2 focus-within:ring-1 focus-within:ring-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                    <g fill="none" stroke="currentColor">
                        <circle cx="11" cy="11" r="6" />
                        <path stroke-linecap="round" d="m20 20l-3-3" />
                    </g>
                </svg>
                <input type="text" id="search" wire:model.live="search" class="p-1.5 focus:outline-0">
            </label>
            <div class="flex items-center gap-5 px-3">
                <div class="relative">
                    <button type="button" id="kategoriAdd"
                        class="relative flex max-h-5 select-none items-center justify-center rounded-md border-2 border-blue-500 p-3 font-bold text-blue-500">
                        Kategori
                    </button>
                    <div class="pointer-events-none absolute right-0 top-10 flex h-36 w-72 flex-col items-center overflow-auto rounded border border-gray-500/30 bg-white opacity-0 shadow-md transition-all duration-[.5s]"
                        id="modalKategori" wire:ignore.self>
                        <button id="addKategoriBtn"
                            class="sticky top-0 w-full bg-white py-2 font-semibold text-green-500">Tambah
                            Kategori</button>
                        <ul class="flex w-full flex-col items-start justify-start">
                            <li class="w-full px-5 py-1">
                                @foreach ($kategori as $item)
                                    <button id="editKategoriBtn" wire:key='{{ $item->id }}'
                                        wire:click='editKategori({{ $item->id }})'
                                        class="flex w-full justify-start px-2 py-1 capitalize hover:bg-gray-500/30">{{ $item->kategori }}</button>
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </div>
                <button type="button"
                    class="size-5 flex select-none items-center justify-center rounded-md border-2 border-green-500 p-3 font-bold text-green-500"
                    id="modalAdd">
                    &plus;
                </button>
            </div>
        </section>
        <table class="z-10 w-full">
            <thead class="sticky top-[61.5px] z-10 bg-white">
                <tr class="*:py-2">
                    <th>No.</th>
                    <th class="text-center">Gambar</th>
                    <th class="max-w-44 text-left">Wisata</th>
                    <th class="text-left">Kategori</th>
                    <th class="text-center">Tiket</th>
                    <th class="text-center">Aksi</th>
                    <th class="max-w-16 text-center">Top Destinasi</th>
                </tr>
            </thead>
            <tbody wire:poll.1s>
                @if ($data->isEmpty())
                    <tr>
                        <td class="h-96 text-center" colspan="7">Tempat wisata tidak ditemukan</td>
                    </tr>
                @else
                    @foreach ($data as $item)
                        <tr class="*:py-6 hover:bg-gray-500/30">
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">
                                <img loading="lazy" src="{{ route('img', $item->gambar) }}" alt="gambar"
                                    class="max-w-20 mx-auto">
                            </td>
                            <td>{{ $item->nama_wisata }}</td>
                            <td>{{ $item->kategori->kategori }}</td>
                            <td class="text-center">{{ $item->harga != null ? currency_IDR($item->harga) : 'Gratis' }}
                            </td>
                            <td class="text-center">
                                <div class="flex items-center justify-center gap-5">
                                    <button type="button" wire:key='{{ $item->id }}'
                                        wire:click='galleryModal({{ $item->id }})'>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M16.25 2.75H7.75C6.22582 2.75264 4.76477 3.35928 3.68701 4.43704C2.60925 5.5148 2.00264 6.97582 2 8.5V15.5C2.00264 17.0242 2.60925 18.4852 3.68701 19.5629C4.76477 20.6407 6.22582 21.2474 7.75 21.25H16.25C17.7742 21.2474 19.2352 20.6407 20.313 19.5629C21.3907 18.4852 21.9974 17.0242 22 15.5V8.5C21.9974 6.97582 21.3907 5.5148 20.313 4.43704C19.2352 3.35928 17.7742 2.75264 16.25 2.75ZM8 6.09998C8.63917 6.09998 9.25214 6.35388 9.7041 6.80585C10.1561 7.25781 10.41 7.87081 10.41 8.50998C10.41 9.14915 10.1561 9.76215 9.7041 10.2141C9.25214 10.6661 8.63917 10.92 8 10.92C7.68351 10.9193 7.37027 10.8563 7.07812 10.7346C6.78598 10.6129 6.52069 10.4348 6.29736 10.2106C5.84634 9.75767 5.59364 9.14415 5.59497 8.50497C5.5963 7.8658 5.85154 7.25336 6.30444 6.80234C6.75734 6.35131 7.37084 6.09865 8.01001 6.09998H8ZM20.5 12.78L18.3201 11.09C17.6921 10.6523 16.9301 10.4495 16.1677 10.5172C15.4053 10.5848 14.6911 10.9186 14.15 11.46L11.8201 13.79C11.3322 14.262 10.6986 14.5546 10.0229 14.62C9.34726 14.6854 8.6693 14.5197 8.09998 14.15C7.82251 13.9667 7.49143 13.8821 7.16003 13.91C6.82724 13.945 6.51656 14.0933 6.28003 14.33L3.84998 17.17C3.58748 16.5689 3.46771 15.9151 3.5 15.26L5.18005 13.31C5.66449 12.8204 6.30263 12.5125 6.9873 12.4378C7.67198 12.3631 8.3615 12.5263 8.94006 12.9C9.21668 13.0873 9.55012 13.1719 9.88257 13.139C10.215 13.1061 10.5254 12.9579 10.76 12.72L13.09 10.4C13.8873 9.60532 14.9399 9.11824 16.0618 9.0249C17.1836 8.93157 18.3023 9.238 19.22 9.88998L20.5 10.89V12.78Z"
                                                fill="#00CE15" />
                                            <path
                                                d="M8.90983 8.5101C8.90983 8.69008 8.85638 8.86604 8.75638 9.01569C8.65639 9.16533 8.51434 9.28195 8.34806 9.35083C8.18178 9.41971 7.99882 9.43773 7.8223 9.40262C7.64578 9.36751 7.48363 9.28083 7.35636 9.15356C7.22909 9.0263 7.14245 8.86418 7.10734 8.68765C7.07222 8.51113 7.09022 8.32815 7.15909 8.16187C7.22797 7.99558 7.34453 7.85347 7.49418 7.75348C7.64383 7.65349 7.81981 7.6001 7.99979 7.6001C8.1193 7.6001 8.23765 7.62364 8.34806 7.66937C8.45847 7.7151 8.55872 7.78214 8.64323 7.86664C8.72773 7.95114 8.79476 8.05146 8.84049 8.16187C8.88622 8.27227 8.90983 8.3906 8.90983 8.5101Z"
                                                fill="#00CE15" />
                                        </svg>
                                    </button>
                                    <button type="button" wire:key='{{ $item->id }}'
                                        wire:click='addSarana({{ $item->id }})'>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <g fill="none" stroke="green" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2">
                                                <path
                                                    d="M13 8c0-2.76-2.46-5-5.5-5S2 5.24 2 8h2l1-1l1 1h4m3-.86A5.82 5.82 0 0 1 16.5 6c3.04 0 5.5 2.24 5.5 5h-3l-1-1l-1 1h-3" />
                                                <path
                                                    d="M5.89 9.71c-2.15 2.15-2.3 5.47-.35 7.43l4.24-4.25l.7-.7l.71-.71l2.12-2.12c-1.95-1.96-5.27-1.8-7.42.35z" />
                                                <path d="M11 15.5c.5 2.5-.17 4.5-1 6.5h4c2-5.5-.5-12-1-14" />
                                            </g>
                                        </svg>
                                    </button>
                                    <button type="button" wire:key='{{ $item->id }}'
                                        wire:click='editWisata({{ $item->id }})'>
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1.55443 13.3039H2.64254L9.34603 6.24261L8.25793 5.09643L1.55443 12.1577V13.3039ZM12.6686 5.05549L9.36546 1.61694L10.4536 0.470754C10.7515 0.156918 11.1176 0 11.5518 0C11.986 0 12.3518 0.156918 12.6492 0.470754L13.7373 1.61694C14.0352 1.93077 14.1907 2.30956 14.2036 2.7533C14.2166 3.19704 14.0741 3.57555 13.7762 3.88884L12.6686 5.05549ZM11.5417 6.26308L3.30317 14.9413H0V11.4618L8.2385 2.78359L11.5417 6.26308ZM8.80198 5.66952L8.25793 5.09643L9.34603 6.24261L8.80198 5.66952Z"
                                                fill="#2F80ED" />
                                        </svg>
                                    </button>
                                    <button wire:key='{{ $item->id }}' type="button"
                                        wire:click='delete_confirmation({{ $item->id }})'>
                                        <svg width="14" height="17" viewBox="0 0 14 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.54227 16.2996C2.07619 16.2996 1.67705 16.1221 1.34486 15.7672C1.01267 15.4122 0.846859 14.986 0.847424 14.4886V2.71661H0V0.905535H4.23712V0H9.32167V0.905535H13.5588V2.71661H12.7114V14.4886C12.7114 14.9866 12.5453 15.4131 12.2131 15.7681C11.8809 16.1231 11.482 16.3002 11.0165 16.2996H2.54227ZM11.0165 2.71661H2.54227V14.4886H11.0165V2.71661ZM4.23712 12.6775H5.93197V4.52768H4.23712V12.6775ZM7.62682 12.6775H9.32167V4.52768H7.62682V12.6775Z"
                                                fill="#D94336" />
                                        </svg>
                                    </button>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="relative mx-auto flex w-max items-center justify-center">
                                    <button type="button" wire:click='favorit({{ $item->id }})'
                                        wire:key='{{ $item->id }}' class="absolute inset-0"></button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        class="{{ isset($isChecked[$item->id]) && $isChecked[$item->id] ? 'fill-yellow-500' : 'fill-white' }}"
                                        viewBox="0 0 24 24">
                                        <path fill="curentColor" stroke="currentColor" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="1.5"
                                            d="m12.495 18.587l4.092 2.15a1.044 1.044 0 0 0 1.514-1.106l-.783-4.552a1.045 1.045 0 0 1 .303-.929l3.31-3.226a1.043 1.043 0 0 0-.575-1.785l-4.572-.657A1.044 1.044 0 0 1 15 7.907l-2.088-4.175a1.044 1.044 0 0 0-1.88 0L8.947 7.907a1.044 1.044 0 0 1-.783.575l-4.51.657a1.044 1.044 0 0 0-.584 1.785l3.309 3.226a1.044 1.044 0 0 1 .303.93l-.783 4.55a1.044 1.044 0 0 0 1.513 1.107l4.093-2.15a1.043 1.043 0 0 1 .991 0" />
                                    </svg>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </section>



    @include('components.wisata-modal')
    @include('components.kategori-modal')
    @include('components.delete-wisataModal')

    @include('components.gallery-modal')
    @include('components.sarana-modal')

</div>

@script
    @include('components.admin-wisata-script')
@endscript
