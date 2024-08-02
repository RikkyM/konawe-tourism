<?php

namespace App\Livewire\Admin;

use App\Models\Gallery;
use App\Models\Kategori;
use App\Models\Sarana;
use App\Models\Wisata as ModelsWisata;
use Livewire\Component;
use Livewire\WithFileUploads;

class Wisata extends Component
{
    use WithFileUploads;

<<<<<<< HEAD
    public $search, $nama_wisata, $deskripsi, $harga, $gambar, $latitude, $longitude, $data_kategori, $kategori_wisata, $gallery, $isChecked = [];
=======
    public $search, $nama_wisata, $deskripsi, $harga, $gambar, $latitude, $longitude, $data_kategori, $kategori_wisata, $gallery = [], $isChecked = [];
>>>>>>> 258c3df4ededd8efa1f832e95db3dbb9a773cc1f
    public $formatWA = '+62';
    public $sarana = [];
    public $dataSarana;
    public $saranaPariwisata;
    public $kategori_id, $wisata_id, $delete_id, $gallery_id, $del_gallery_id, $sarana_id;
    public $listGallery;

    public $imageGallery = [];

    public function favorit($id)
    {
        $wisata = ModelsWisata::find($id);
        if ($wisata) {
            $wisata->favorit = !$wisata->favorit;
            $wisata->save();
            $this->isChecked[$id] = $wisata->favorit;
        }
    }

    public function mount()
    {
        $wisatas = ModelsWisata::all();
        foreach ($wisatas as $wisata) {
            $this->isChecked[$wisata->id] = $wisata->favorit;
        }
    }

    public function tambahWisata()
    {
        $this->validate([
            'nama_wisata' => 'required|max:255',
            'data_kategori' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image',
            'latitude' => 'required',
            'longitude' => 'required',
<<<<<<< HEAD

=======
            
>>>>>>> 258c3df4ededd8efa1f832e95db3dbb9a773cc1f
        ], [
            'nama_wisata.required' => 'Nama wisata perlu diisi',
            'data_kategori.required' => 'Kategori perlu diisi',
            'deskripsi.required' => 'Deskripsi perlu diisi',
            'gambar.required' => 'Gambar perlu diisi',
            'gambar.max' => 'Maksimal ukuran gambar 5MB',
            'latitude.required' => 'Lokasi perlu diisi',
<<<<<<< HEAD

=======
            
>>>>>>> 258c3df4ededd8efa1f832e95db3dbb9a773cc1f
        ]);

        if ($this->gambar) {
            $photo = $this->gambar;
            $new_photo_name = uniqid() . '.' . $photo->getClientOriginalExtension();
            $photo->storeAs('public/gambar-wisata', $new_photo_name);

            $wisata = new ModelsWisata();
            $wisata->nama_wisata = $this->nama_wisata;
            $wisata->id_kategori = $this->data_kategori;
            $wisata->harga = currencyIDRToNumeric($this->harga);
            $wisata->deskripsi = $this->deskripsi;
            $wisata->gambar = $this->gambar;
            $wisata->latitude = $this->latitude;
            $wisata->longitude = $this->longitude;
            $wisata->gambar = $new_photo_name;
            $wisata->favorit = '0';
            $wisata->save();

            $this->nama_wisata = '';
            $this->harga = '';
            $this->deskripsi = '';
            $this->gambar = '';
            $this->data_kategori = '';
            $this->latitude = '';
            $this->longitude = '';
            $this->gambar = '';
            $this->kategori_wisata;

            $this->isChecked[$wisata->id] = false;

            session()->flash('message', 'Data wisata berhasil ditambahkan!');
            $this->dispatch('show-notif');
        }
    }

    public function editWisata($id)
    {
        $this->wisata_id = $id;
        $wisata = ModelsWisata::find($id);
        $this->nama_wisata = $wisata->nama_wisata;
        $this->data_kategori = $wisata->id_kategori;
        $this->harga = currency_IDR($wisata->harga);
        $this->deskripsi = $wisata->deskripsi;
        $this->gambar = $wisata->gambar;
        $this->latitude = $wisata->latitude;
        $this->longitude = $wisata->longitude;
        $this->dispatch('modalEditWisata', route('img', $this->gambar));
    }

    public function updateWisata()
    {
        $this->validate([
            'nama_wisata' => 'required|max:255',
            'data_kategori' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'max:5120',
            'latitude' => 'required',
            'longitude' => 'required',
        ], [
            'nama_wisata.required' => 'Nama wisata perlu diisi',
            'data_kategori.required' => 'Kategori perlu diisi',
            'deskripsi.required' => 'Deskripsi perlu diisi',
            'gambar.max' => 'Maksimal ukuran gambar 5MB',
            'latitude.required' => 'Lokasi perlu diisi',
        ]);

        $id = $this->wisata_id;
        $wisata = ModelsWisata::find($id);
        $new_photo_name = $wisata->gambar;

        if ($this->gambar && is_object($this->gambar)) {
            $photo = $this->gambar;
            $new_photo_name = uniqid() . '.' . $photo->getClientOriginalExtension();
            $photo->storeAs('public/gambar-wisata', $new_photo_name);
        }

        $wisata->nama_wisata = $this->nama_wisata ?? $wisata->nama_wisata;
        $wisata->id_kategori = $this->data_kategori ?? $wisata->id_kategori;
        $wisata->harga = currencyIDRToNumeric($this->harga) ?? $wisata->harga;
        $wisata->deskripsi = $this->deskripsi ?? $wisata->deskripsi;
        $wisata->gambar = $new_photo_name;
        $wisata->latitude = $this->latitude ?? $wisata->latitude;
        $wisata->longitude = $this->longitude ?? $wisata->longitude;
        $wisata->favorit = '0';
        $wisata->save();

        $this->nama_wisata = '';
        $this->harga = '';
        $this->deskripsi = '';
        $this->gambar = '';
        $this->latitude = '';
        $this->longitude = '';
        $this->kategori_wisata = '';

        $this->isChecked[$wisata->id] = false;

        session()->flash('message', 'Data wisata berhasil diubah!');
        $this->dispatch('show-notifEdit');
    }


    public function tambahKategoriWisata()
    {
        $this->validate([
            'kategori_wisata' => 'required',
        ], [
            'kategori_wisata.required' => 'Kategori perlu diisi',
        ]);

        $kategori = new Kategori();
        $kategori->kategori = $this->kategori_wisata;
        $kategori->save();

        $this->kategori_wisata = '';

        $this->dispatch('kategori');
    }

    public function editKategori($id)
    {
        $kategori = Kategori::find($id);
        $this->kategori_wisata = $kategori->kategori;
        $this->kategori_id = $id;
        $this->dispatch('openEdit');
    }

    public function ubahCategory()
    {
        $id = $this->kategori_id;

        $data = Kategori::find($id);
        $data->update(['kategori' => $this->kategori_wisata]);
        $this->kategori_wisata = '';
        $this->dispatch('kategoriEdit');
    }

    public function delete_confirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatch('deleteConfirmation');
    }

    public function delWisata()
    {
        ModelsWisata::find($this->delete_id)->delete();
        $this->dispatch('delete');
        $this->delete_id = null;
    }

    public function galleryModal($id)
    {
        $this->listGallery = Gallery::where('wisata_id', $id)->get();
        $this->gallery_id = $id;
        $this->dispatch('information');
    }

    public function galleryAdd()
    {
        $this->validate([
<<<<<<< HEAD
            'gallery' => 'required|max:5120'
        ]);

        $id = $this->gallery_id;

        foreach ($this->gallery as $gal) {
            $name = $gal->hashName();
            $gal->storeAs('public/gallery', $name);

            $gallery = new Gallery();
            $gallery->wisata_id = $id;
            $gallery->gambar = $name;
            $gallery->save();
=======
            'gallery' => 'required|file|max:5120'
        ]);

        $id = $this->gallery_id;
        
        if (!is_null($this->gallery)) {
            collect($this->gallery)->map(function ($gal) use ($id) {
                $name = $gal->hashName();
                $gal->storeAs('public/gallery', $name);

                $gallery = new Gallery();
                $gallery->wisata_id = $id;
                $gallery->gambar = $name;
                $gallery->save();
            });
>>>>>>> 258c3df4ededd8efa1f832e95db3dbb9a773cc1f
        }

        $this->dispatch('addGallery');
    }

    public function deleteGalleryConfirmation($id)
    {
        if ($id != '') {
            $this->del_gallery_id = $id;
        }
<<<<<<< HEAD

=======
        
>>>>>>> 258c3df4ededd8efa1f832e95db3dbb9a773cc1f
        $this->dispatch('deleteGallery');
    }

    public function deleteGallery()
    {
        if ($this->del_gallery_id != '') {
            $id = $this->del_gallery_id;
            Gallery::find($id)->delete();
        }

        if (!empty($this->imageGallery)) {
            Gallery::whereIn('id', $this->imageGallery)->delete();
        }

        $this->imageGallery = [];

        $this->dispatch('doneDeleteGallery');
    }

    public function addSarana($id)
    {
        $this->sarana_id = $id;
        $this->sarana[] = '';
        $this->dataSarana = Sarana::where('id_wisata', $id)->get();
        $this->dispatch('saranaModal');
    }

    public function deleteSarana($id)
    {
        Sarana::find($id)->delete();
    }

    public function addInputSarana()
    {
        $this->sarana[] = '';
    }

    public function simpanSarana()
    {
        $this->validate([
            'sarana.*' => 'required|string',
        ]);

<<<<<<< HEAD
        foreach ($this->sarana as $sarana) {
=======
        foreach($this->sarana as $sarana) {
>>>>>>> 258c3df4ededd8efa1f832e95db3dbb9a773cc1f
            Sarana::create([
                'id_wisata' => $this->sarana_id,
                'sarana' => $sarana
            ]);
        }
<<<<<<< HEAD

=======
        
>>>>>>> 258c3df4ededd8efa1f832e95db3dbb9a773cc1f
        $this->sarana = [];
        $this->dispatch('simpanSarana');
    }

    public function render()
    {
        $kategori = Kategori::get();

        $data = ModelsWisata::with('kategori')->where('nama_wisata', 'like', '%' . $this->search . '%')
            ->orWhereHas('kategori', function ($query) {
                $query->where('kategori', 'like', '%' . $this->search . '%');
            })
            ->orWhere('harga', 'like', '%' . $this->search . '%')
            ->orderBy('id', 'DESC')
            ->get();

        return view('livewire.admin.wisata', compact('data', 'kategori'));
    }
}
