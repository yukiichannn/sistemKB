<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index() {
        $dosen = Dosen::all();
        return view('dosen.index' , ['dosen' => $dosen]);
    }

    public function create() {
        $mataKuliah = Dosen::all();
        return view('dosen.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'noTelp' => 'required',
            'dokter' => 'required',
            'dosis' => 'required'
        ]);

        $dosen = Dosen::create($formFields);
        return redirect()->route('dosen.index')->with('success', $formFields['nama'] . ' Telah ditambahkan.');
    }
}
