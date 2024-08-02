<?php

namespace App\Livewire;

use App\Models\Kategori;
use App\Models\Wisata;
use Livewire\Component;

class DestinasiWisata extends Component
{
    public $search;
    public $selectKategori = [];

    public function resetFilter()
    {
        $this->selectKategori = [];
    }

    public function getFilteredResults()
    {
        $query = Wisata::query();

        if (!empty($this->search)) {
            $query->where('nama_wisata', 'like', '%' . $this->search . '%')
                ->orWhere('harga', 'like', '%' . $this->search . '%')
                ->orWhereHas('kategori', function ($query) {
                    $query->where('kategori', 'like', '%' . $this->search . '%');
                });
        }

        if (!empty($this->selectKategori)) {
            $query->whereHas('kategori', function ($query) {
                $query->whereIn('id', $this->selectKategori);
            });
        }

        return $query->orderBy('id', 'DESC')->get();
    }

    public function render()
    {
        $kategori = Kategori::all();
        $results = $this->getFilteredResults();

        return view('livewire.destinasi-wisata', [
            'kategori' => $kategori,
            'results' => $results,
        ]);
    }
}
