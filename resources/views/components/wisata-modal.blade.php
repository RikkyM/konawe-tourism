<div id="modal" wire:ignore.self
    class="pointer-events-none absolute left-0 top-0 z-50 flex h-full w-full items-center justify-center overflow-auto bg-black/30 py-10 opacity-0 backdrop-blur-sm transition-all">
    <form enctype="multipart/form-data" wire:ignore.self wire:submit='tambahWisata'
        class="absolute grid w-full max-w-[800px] grid-cols-4 gap-3 rounded bg-white p-5 opacity-0 transition-opacity ease-linear"
        id="add">
        @csrf
        <h2 class="col-span-4 text-center text-xl font-semibold">Tambah Wisata</h2>
        <label for="nama_wisata" class="col-span-2 flex flex-col gap-0.5">
            <span class="text-sm font-semibold text-gray-600">Nama Wisata</span>
            <input type="text" wire:model='nama_wisata' id="nama_wisata" required
                class="rounded-md border border-gray-500/50 p-2 text-sm focus:outline-gray-500 w-full"
                placeholder="Masukkan nama wisata">
            @error('nama_wisata')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </label>
        <label for="kategori" class="col-span-2 flex flex-col gap-0.5">
            <span class="text-sm font-semibold text-gray-600">Kategori</span>
            <select wire:model='data_kategori' name="kategori" id="kategori" required
                class="rounded-md border border-gray-500/50 p-2 text-sm focus:outline-gray-500">
                <option value="">Pilih Kategori</option>
                @foreach ($kategori as $c)
                    <option value="{{ $c->id }}">{{ $c->kategori }}</option>
                @endforeach
            </select>
            @error('data_kategori')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </label>
        <label for="harga" class="col-span-2 flex flex-col gap-0.5">
            <span class="text-sm font-semibold text-gray-600">Harga <span>(Opsional)</span></span>
            <input type="text" wire:model='harga' id="harga" maxlength="11" inputmode="numeric"
                class="rounded-md border border-gray-500/50 p-2 text-sm focus:outline-gray-500"
                placeholder="Rp. xxx.xxx">
            @error('harga')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </label>
        <label for="deskripsi" class="col-span-4 flex flex-col gap-0.5">
            <span class="text-sm font-semibold text-gray-600">Deskripsi</span>
            <textarea id="deskripsi" required
                class="h-36 resize-none rounded-md border border-gray-500/50 p-2 text-sm focus:outline-gray-500"
                wire:model='deskripsi' placeholder="Masukkan deskripsi wisata"></textarea>
            @error('deskripsi')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </label>
        <div class="col-span-2 flex flex-col">
            <div class="w-full pb-0.5">
                <span class="text-sm font-semibold text-gray-600">Lokasi</span>
            </div>
            <div class="h-44 w-full overflow-hidden rounded-sm border border-gray-500/50">
                <div id="map" class="h-full w-full" wire:ignore></div>
            </div>
            @error('latitude')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <label for="image" class="col-span-2" wire:ignore.self>
            <div wire:ignore class="my-0.5 flex justify-between text-sm font-semibold text-gray-600">
                <span class="text-sm font-semibold text-gray-600">Gambar</span>
                <span><button type="button" id="reset-btn" class="hidden capitalize text-red-500">reset</button></span>
            </div>
            <div class="relative h-44 w-full rounded-lg border-2 border-dashed border-gray-300 p-6" id="dropzone">

                <input id="image" wire:model='gambar' type="file" required name="gambar"
                    class="absolute inset-0 z-50 h-full w-full opacity-0" accept=".jpg,.jpeg,.png" />

                <div class="text-center" id="text" wire:ignore>
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
                        JPG, PNG Max Size 5MB
                    </p>
                </div>

                <img src="" wire:ignore.self class="mx-auto hidden max-h-full" id="preview">
            </div>
            @error('gambar')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </label>

        <label for="latitude" class="col-span-2 flex items-start justify-start">
            <input type="text" id="latitude" required class="hidden" wire:model='latitude' name="latitude"
                placeholder="Latitude" />
        </label>
        <label for="longitude">
            <input type="text" id="longitude" required class="hidden" wire:model='longitude' name="longitude"
                placeholder="Longitude" />
        </label>

        <div class="col-span-4 flex justify-center gap-3">
            <button class="rounded bg-gray-500 px-5 py-2 font-semibold text-white" wire:loading wire:target="gambar"
                disabled>Loading...</button>
            <button type="button" wire:click='tambahWisata'
                class="rounded bg-green-500 px-5 py-2 font-semibold text-white" wire:loading.remove
                wire:target="gambar">Tambah</button>
            <button id="cancel" type="button"
                class="rounded bg-red-500 px-5 py-2 font-semibold text-white">Batal</button>
        </div>
    </form>
</div>

<div id="modalEditWisata" wire:ignore.self
    class="pointer-events-none absolute left-0 top-0 z-50 flex h-full w-full items-center justify-center overflow-auto bg-black/30 py-10 opacity-0 backdrop-blur-sm transition-all">

    <form enctype="multipart/form-data" wire:ignore.self wire:submit='updateWisata'
        class="absolute grid w-full max-w-[800px] grid-cols-4 gap-3 rounded bg-white p-5 opacity-0 transition-opacity ease-linear"
        id="edit">
        @csrf
        <h2 class="col-span-4 text-center text-xl font-semibold">Edit Wisata</h2>
        <label for="nama_wisata" class="col-span-2 flex flex-col gap-0.5">
            <span class="text-sm font-semibold text-gray-600">Nama Wisata</span>
            <input type="text" wire:model='nama_wisata' id="nama_wisata"
                class="rounded-md border border-gray-500/50 p-2 text-sm focus:outline-gray-500 w-full"
                placeholder="Masukkan nama wisata">
            @error('nama_wisata')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </label>
        <label for="kategori" class="col-span-2 flex flex-col gap-0.5">
            <span class="text-sm font-semibold text-gray-600">Kategori</span>
            <select wire:model='data_kategori' name="kategori" id="kategori"
                class="rounded-md border border-gray-500/50 p-2 text-sm focus:outline-gray-500">
                <option value="">Pilih Kategori</option>
                @foreach ($kategori as $c)
                    <option value="{{ $c->id }}">{{ $c->kategori }}</option>
                @endforeach
            </select>
            @error('kategori')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </label>
        
        <label for="harga" class="col-span-2 flex flex-col gap-0.5">
            <span class="text-sm font-semibold text-gray-600">Harga <span>(Opsional)</span></span>
            <input type="text" wire:model='harga' id="harga" maxlength="11" inputmode="numeric"
                class="rounded-md border border-gray-500/50 p-2 text-sm focus:outline-gray-500"
                placeholder="Rp. xxx.xxx">
            @error('harga')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </label>
        <label for="deskripsi" class="col-span-4 flex flex-col gap-0.5">
            <span class="text-sm font-semibold text-gray-600">Deskripsi</span>
            <textarea id="deskripsi"
                class="h-36 resize-none rounded-md border border-gray-500/50 p-2 text-sm focus:outline-gray-500"
                wire:model='deskripsi' placeholder="Masukkan deskripsi wisata"></textarea>
            @error('deskripsi')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </label>

        <div class="col-span-2 flex flex-col items-center">
            <div class="w-full pb-0.5">
                <span class="text-sm font-semibold text-gray-600">Lokasi</span>
            </div>
            <div class="h-44 w-full overflow-hidden rounded-sm border border-gray-500/50">
                <div id="mapEdit" class="h-full w-full" wire:ignore></div>
            </div>
            @error('latitude')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <label for="imageEdit" class="col-span-2" wire:ignore.self>
            <div wire:ignore class="my-0.5 flex justify-between text-sm font-semibold text-gray-600">
                <span class="text-sm font-semibold text-gray-600">Gambar</span>
                <span><button type="button" id="reset-btnEdit" class="capitalize text-red-500">reset</button></span>
            </div>
            <div class="relative h-44 w-full rounded-lg border-2 border-dashed border-gray-300 p-6" id="dropzone">
                <input id="imageEdit" wire:model='gambar' type="file"
                    class="absolute inset-0 z-50 h-full w-full opacity-0" accept=".jpg,.jpeg,.png" />

                <div class="text-center" id="textEdit" wire:ignore>
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
                        JPG, PNG Max Size 5MB
                    </p>
                </div>

                <img wire:ignore.self src="" class="mx-auto hidden max-h-full" id="previewEdit">
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
            <button type="button" wire:click='updateWisata'
                class="rounded bg-blue-500 px-5 py-2 font-semibold text-white" wire:loading.remove
                wire:target="gambar">Edit</button>
            <button id="cancelEditWisata" type="button"
                class="rounded bg-red-500 px-5 py-2 font-semibold text-white">Batal</button>
        </div>
    </form>
</div>
