<div class="h-full overflow-auto bg-white">

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <section class="flex items-center justify-between p-2">
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
        <div class="px-3">
            <button type="button"
                class="size-5 flex select-none items-center justify-center rounded-md border-2 border-green-500 p-3 font-bold text-green-500"
                id="modalAdd">
                &plus;
            </button>
        </div>
    </section>
    <section class="overflow-auto">
        <table class="w-full">
            <thead>
                <tr class="*:py-2">
                    <th>No.</th>
                    <th class="text-center">Gambar</th>
                    <th class="text-left">Wisata</th>
                    <th class="text-left">Kategori</th>
                    <th class="text-center">Tiket</th>
                    <th class="text-center">Aksi</th>
                    <th class="max-w-16 text-center">Top Destinasi</th>
                </tr>
            </thead>
            <tbody>
                @if ($data->isEmpty())
                    <tr>
                        <td class="h-96 text-center" colspan="7">Tempat wisata tidak ditemukan</td>
                    </tr>
                @else
                    @foreach ($data as $item)
                        <tr class="*:py-6 hover:bg-gray-500/30">
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">
                                <img src="{{ asset('storage/gambar-wisata/' . $item->gambar) }}" alt="gambar"
                                    class="max-w-20 mx-auto">
                            </td>
                            <td>{{ $item->nama_wisata }}</td>
                            <td>{{ $item->deskripsi }}</td>
                            <td class="text-center">{{ $item->harga != null ? currency_IDR($item->harga) : 'Gratis' }}
                            </td>
                            <td class="text-center">
                                <div class="flex items-center justify-center gap-5">
                                    <button type="button" href="#">
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
                                    <button type="button" wire:click='edit({{ $item->id }})'>
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1.55443 13.3039H2.64254L9.34603 6.24261L8.25793 5.09643L1.55443 12.1577V13.3039ZM12.6686 5.05549L9.36546 1.61694L10.4536 0.470754C10.7515 0.156918 11.1176 0 11.5518 0C11.986 0 12.3518 0.156918 12.6492 0.470754L13.7373 1.61694C14.0352 1.93077 14.1907 2.30956 14.2036 2.7533C14.2166 3.19704 14.0741 3.57555 13.7762 3.88884L12.6686 5.05549ZM11.5417 6.26308L3.30317 14.9413H0V11.4618L8.2385 2.78359L11.5417 6.26308ZM8.80198 5.66952L8.25793 5.09643L9.34603 6.24261L8.80198 5.66952Z"
                                                fill="#2F80ED" />
                                        </svg>
                                    </button>
                                    <a href="#">
                                        <svg width="14" height="17" viewBox="0 0 14 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.54227 16.2996C2.07619 16.2996 1.67705 16.1221 1.34486 15.7672C1.01267 15.4122 0.846859 14.986 0.847424 14.4886V2.71661H0V0.905535H4.23712V0H9.32167V0.905535H13.5588V2.71661H12.7114V14.4886C12.7114 14.9866 12.5453 15.4131 12.2131 15.7681C11.8809 16.1231 11.482 16.3002 11.0165 16.2996H2.54227ZM11.0165 2.71661H2.54227V14.4886H11.0165V2.71661ZM4.23712 12.6775H5.93197V4.52768H4.23712V12.6775ZM7.62682 12.6775H9.32167V4.52768H7.62682V12.6775Z"
                                                fill="#D94336" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="relative mx-auto flex w-max items-center justify-center">
                                    <button wire:click='favorit({{ $item->id }})' class="absolute inset-0">
                                    </button>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        class="{{ $isChecked[$item->id] ? 'fill-yellow-500' : 'fill-white' }}"
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

</div>

@script
    <script>
        const modalAdd = document.querySelector('#modalAdd')
        const modal = document.querySelector('#modal');
        const add = document.querySelector('#add');
        const cancelButton = document.querySelector('#cancel');

        Livewire.on('show-notif', () => {
            console.log('asdasd');
            add.classList.add('opacity-0', 'delay-0');
            add.classList.remove('delay-[.3s]')
            modal.classList.add('opacity-0', 'pointer-events-none', 'delay-[.4s]')
            modal.classList.remove('pointer-events-auto');
        })


        modalAdd.addEventListener('click', () => {
            modal.classList.toggle('opacity-0')
            modal.classList.toggle('pointer-events-auto');
            modal.classList.toggle('pointer-events-none');

            add.classList.toggle('opacity-0');
            add.classList.add('delay-[.3s]')
            add.classList.remove('delay-0')

            modal.classList.remove('delay-[.4s]')

            modal.addEventListener('click', e => {
                if (e.target == modal) {
                    add.classList.add('opacity-0', 'delay-0');
                    add.classList.remove('delay-[.3s]')
                    modal.classList.add('opacity-0', 'pointer-events-none', 'delay-[.4s]')
                    modal.classList.remove('pointer-events-auto');
                }
            })

            cancelButton.addEventListener('click', () => {
                if (marker) {
                    map.removeLayer(marker);
                    marker = null;
                    document.getElementById('latitude').value = -4.19191;
                    document.getElementById('longitude').value = 122.44854;
                }

                add.classList.add('opacity-0', 'delay-0');
                add.classList.remove('delay-[.3s]')

                modal.classList.add('opacity-0', 'pointer-events-none', 'delay-[.4s]')
                modal.classList.remove('pointer-events-auto');
            })
        });

        // Map
        var map = L.map('map', {
            attributionControl: false,
            center: [-4.19191, 122.44854],
            zoom: 12
        });

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

        var marker;

        map.on('click', function(e) {
            var latitude = e.latlng.lat;
            var longitude = e.latlng.lng;

            @this.latitude = latitude
            @this.longitude = longitude

            if (marker) {
                marker.setLatLng(e.latlng);
            } else {
                marker = L.marker(e.latlng).addTo(map);
            }
        });

        // preview image
        const imageInput = document.getElementById('image');
        const preview = document.getElementById('preview');
        const resetBtn = document.getElementById('reset-btn');
        const text = document.querySelector('#text');

        imageInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
                text.classList.add('hidden')
                resetBtn.classList.remove('hidden')
            } else {
                preview.src = '';
                preview.classList.add('hidden');
                text.classList.remove('hidden')
            }
        });

        resetBtn.addEventListener('click', () => {
            imageInput.value = '';
            preview.src = '';
            preview.classList.add('hidden');
            text.classList.remove('hidden')
            resetBtn.classList.add('hidden')
        });

        // format rupiah
        function formatRupiah(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                rupiah = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }

        const harga = document.querySelector('#harga');

        harga.addEventListener('input', () => {
            harga.value = formatRupiah(harga.value, 'Rp. ');
        })

        function NumberOnly(element) {
            element.addEventListener('input', function() {
                this.value = this.value.replace(/[^0-9]/g, '');
            })
        }

        const whatsapp = document.querySelector("#whatsapp");

        NumberOnly(whatsapp);
    </script>
@endscript
