<div id="modal" wire:ignore
    class="pointer-events-none absolute left-0 top-0 flex h-full w-full items-center justify-center overflow-auto bg-black/30 py-10 opacity-0 backdrop-blur-sm transition-all">

    <form enctype="multipart/form-data"
        class="absolute grid w-full max-w-[800px] grid-cols-4 gap-3 rounded bg-white p-5 opacity-0 transition-opacity ease-linear"
        id="add">
        @csrf
        <h2 class="col-span-4 text-center text-xl font-semibold">Tambah Wisata</h2>
        <label for="nama_wisata" class="flex flex-col gap-0.5 col-span-2">
            <span class="text-sm font-semibold text-gray-600">Nama Wisata</span>
            <input type="text" wire:model='nama_wisata' id="nama_wisata"
                class="rounded-md border border-gray-500/50 p-2 text-sm focus:outline-gray-500"
                placeholder="Masukkan nama wisata">
        </label>
        <label for="kategori" class="flex flex-col gap-0.5 col-span-2">
            <span class="text-sm font-semibold text-gray-600">Kategori</span>
            <select name="kategori" id="kategori" class="rounded-md border border-gray-500/50 p-2 text-sm focus:outline-gray-500">
                <option value=""></option>
                <option value="">top destinasi</option>
                <option value="">destinasi</option>
            </select>
            {{-- <input type="text" wire:model='harga' id="harga" maxlength="11"
                class="rounded-md border border-gray-500/50 p-2 text-sm focus:outline-gray-500"
                placeholder="Rp. xxx.xxx"> --}}
        </label>
        <label for="whatsapp" class="flex flex-col gap-0.5 col-span-2">
            <span class="text-sm font-semibold text-gray-600">No. Whatsapp</span>
            <div
                class="flex rounded-md border border-gray-500/50 p-2 text-sm focus-within:ring-1 focus-within:ring-gray-500">
                <input type="text" wire:model='formatWA' class="w-10 focus:outline-none" readonly tabindex="-1">
                <input type="text" wire:model='whatsapp' id="whatsapp" maxlength="11" inputmode="numeric"
                    class="w-full focus:outline-none" placeholder="Masukkan nomor whatsapp">
            </div>
        </label>
        <label for="harga" class="flex flex-col gap-0.5 col-span-2">
            <span class="text-sm font-semibold text-gray-600">Harga</span>
            <input type="text" wire:model='harga' id="harga" maxlength="11" inputmode="numeric"
                class="rounded-md border border-gray-500/50 p-2 text-sm focus:outline-gray-500"
                placeholder="Rp. xxx.xxx">
        </label>
        <label for="deskripsi" class="col-span-4 flex flex-col gap-0.5">
            <span class="text-sm font-semibold text-gray-600">Deskripsi</span>
            <textarea id="deskripsi"
                class="h-44 resize-none rounded-md border border-gray-500/50 p-2 text-sm focus:outline-gray-500"
                wire:model='deskripsi' placeholder="Masukkan deskripsi wisata"></textarea>
        </label>

        <div class="flex flex-col items-center col-span-2">
            <div class="w-full pb-0.5">
                <span class="text-sm font-semibold text-gray-600">Lokasi</span>
            </div>
            <div class="h-44 w-full overflow-hidden rounded-sm border border-gray-500/50">
                <div id="map" class="h-full w-full" wire:ignore></div>
            </div>
        </div>

        <label for="image" class="col-span-2">
            <div class="my-0.5 flex justify-between text-sm font-semibold text-gray-600">
                <span class="text-sm font-semibold text-gray-600">Gambar</span>
                <span><button type="button" id="reset-btn" class="hidden capitalize text-red-500">reset</button></span>
            </div>
            <div class="relative h-44 w-full rounded-lg border-2 border-dashed border-gray-300 p-6" id="dropzone">

                <input id="image" wire:model='gambar' type="file"
                    class="absolute inset-0 z-50 h-full w-full opacity-0" accept=".jpg,.jpeg,.png" />

                <div class="text-center" id="text">
                    <img class="mx-auto h-12 w-12" src="https://www.svgrepo.com/show/357902/image-upload.svg"
                        alt="logo">

                    <h3 class="mt-2 text-sm font-medium text-gray-900">
                        <div class="relative cursor-pointer">
                            <span>Drag and drop</span>
                            <span class="text-indigo-600"> or browse</span>
                            <span>to upload</span>
                        </div>
                    </h3>
                    <p class="mt-1 text-xs text-gray-500">
                        JPG, PNG
                    </p>
                </div>

                <img src="" class="mx-auto hidden max-h-full" id="preview">
            </div>
        </label>

        <label for="latitude">
            <input type="text" id="latitude" class="hidden" wire:model='latitude' name="latitude"
                placeholder="Latitude" />
        </label>
        <label for="longitude">
            <input type="text" id="longitude" class="hidden" wire:model='longitude' name="longitude"
                placeholder="Longitude" />
        </label>

        <div class="col-span-4 flex justify-center gap-3">
            <button class="rounded bg-gray-500 px-5 py-2 font-semibold text-white" wire:loading wire:target="gambar"
                disabled>Loading...</button>
            <button type="button" wire:click='tambahWisata' class="rounded bg-green-500 px-5 py-2 font-semibold text-white" wire:loading.remove
                wire:target="gambar">Tambah</button>
            <button id="cancel" type="button"
                class="rounded bg-red-500 px-5 py-2 font-semibold text-white">Batal</button>
        </div>
    </form>
</div>
