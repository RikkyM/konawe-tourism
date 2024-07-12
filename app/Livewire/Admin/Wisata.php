<?php

namespace App\Livewire\Admin;

use App\Models\Kategori;
use App\Models\Wisata as ModelsWisata;
use Livewire\Component;
use Livewire\WithFileUploads;

class Wisata extends Component
{
    use WithFileUploads;

    public $search, $nama_wisata, $deskripsi, $harga, $whatsapp, $gambar, $latitude, $longitude, $data_kategori, $kategori_wisata, $isChecked = [];
    public $formatWA = '+62';
    public $kategori_id;
    public $wisata_id;
    public $delete_id;

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
            'harga' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|max:5120',
            'latitude' => 'required',
            'longitude' => 'required',
            'whatsapp' => 'required',
        ], [
            'nama_wisata.required' => 'Nama wisata perlu diisi',
            'data_kategori.required' => 'Kategori perlu diisi',
            'harga.required' => 'Harga perlu diisi',
            'deskripsi.required' => 'Deskripsi perlu diisi',
            'gambar.required' => 'Gambar perlu diisi',
            'gambar.max' => 'Maksimal ukuran gambar 5MB',
            'latitude.required' => 'Lokasi perlu diisi',
            'whatsapp.required' => 'Whatsapp perlu diisi'
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
            $wisata->whatsapp = $this->whatsapp;
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
            $this->whatsapp = '';
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
        $this->whatsapp = $wisata->whatsapp;
        $this->dispatch('modalEditWisata', asset('storage/gambar-wisata/' . $this->gambar));
    }

    public function updateWisata()
    {
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
        $wisata->whatsapp = $this->whatsapp ?? $wisata->whatsapp;
        $wisata->favorit = '0';
        $wisata->save();

        $this->nama_wisata = '';
        $this->harga = '';
        $this->deskripsi = '';
        $this->gambar = '';
        $this->latitude = '';
        $this->longitude = '';
        $this->whatsapp = '';
        $this->kategori_wisata = '';

        $this->isChecked[$wisata->id] = false;

        session()->flash('message', 'Data wisata berhasil diubah!');
        $this->dispatch('show-notifEdit');
    }


    public function tambahKategoriWisata()
    {
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
