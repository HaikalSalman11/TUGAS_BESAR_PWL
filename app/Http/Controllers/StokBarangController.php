<?php

namespace App\Http\Controllers;

use App\Models\StokBarang;
use Illuminate\Http\Request;

class StokBarangController extends Controller
{
    public function index()
    {
        $data ['stok_barang'] = StokBarang::all();
        return view('StokBarang.index', $data);
    }
}
