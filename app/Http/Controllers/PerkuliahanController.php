<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\DosenMatakuliah;
use App\Models\Matakuliah;
use App\Models\Perkuliahan;
use App\Models\RuangKelas;
use App\Models\suntik_kb;
use Illuminate\Http\Request;
use App\Http\Controllers\suntik_kbController;
use App\Http\Controllers\DosenController;

class PerkuliahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen = Dosen::all();
        $suntik = suntik_kb::all();
        return view('perkuliahan.index', ['dosen' => $dosen, 'suntik' => $suntik]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $dosen = Dosen::all();

        return view('perkuliahan.create', ['dosen' => $dosen]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        suntik_kb::create($request->all());
        return redirect()->route('perkuliahan.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perkuliahan  $perkuliahan
     * @return \Illuminate\Http\Response
     */
    public function show(Perkuliahan $perkuliahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perkuliahan  $perkuliahan
     * @return \Illuminate\Http\Response
     */
    public function edit(Perkuliahan $perkuliahan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Perkuliahan  $perkuliahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perkuliahan $perkuliahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perkuliahan  $perkuliahan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perkuliahan $perkuliahan)
    {
        //
    }
}
