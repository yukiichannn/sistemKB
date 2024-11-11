<?php

namespace App\Http\Livewire;

use App\Models\Dosen;
use App\Models\Matakuliah;
use Livewire\Component;

class DosenCreate extends Component
{
    public $nama;
    public $noTelp;
    public $address;
    public $dokter;
    public $dosis;
    public $matakuliahInput = [];
    public $dismissState;

    public function render()
    {
        $matakuliah = Matakuliah::orderBy('nama', 'asc')->get();
        return view('livewire.dosen-create', ['matakuliah' => $matakuliah]);
    }

    public function store(){
        $input = $this->validate([
            'nama' => 'required',
            'noTelp' => 'required',
            'address' => 'required',
            'dokter' => 'required',
            'dosis' => 'required',
        ]);
        // dd($input['matakuliahInput']);

        $dosen = Dosen::create($input);

        $this->clearInput();
        $this->emit('stored', ['instance' => $dosen->nama , 'dismiss' => $this->dismissState]);
    }

    private function clearInput() {
        $this->nama = null;
        $this->address = null;
        $this->noTelp = null;
        $this->dokter = null;
        $this->dosis = null;
    }
}
