<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class suntik_kbController extends Controller
{
    public function index() {
        $suntik = SuntikKB::all();
        return view('suntik_kb.index', ['suntik' => $suntik]);
    }
}
