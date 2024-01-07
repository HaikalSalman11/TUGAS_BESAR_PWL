<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    public function index()
    {
        $data ['barang_keluar'] = BarangKeluar::all();
        return view('BarangKeluar.index', $data);
    }

    public function create()
    {
        $data ['barang_keluar'] = BarangKeluar::all();
        return view('BarangKeluar.create', $data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
        'kode_barang_keluar' => 'required|max:255',
        'jumlah_keluar' => 'required|max:150',
        'tgl_keluar' => 'required|date',
        'tujuan' => 'required|max:150',

        ]);
     

        BarangKeluar::create($validated);
        $notification = array(
            'message' => 'Data Barang berhasil ditambahkan',
            'alert-type' => 'success'
        );
        if($request->save == true) {
            return redirect()->route('BarangKeluar')->with($notification);
        } else {
        return redirect()->route('BarangKeluar.create')->with($notification);
        }

        public function edit($id)
        {
            $BarangKeluar = BarangKeluar::find($id);
            return view('BarangKeluar.edit', compact('BarangKeluar',));
        }
    
        public function update(Request $request, string $id)
        {
        $barang = Barang::find($id);
        $validated = $request->validate([
            'kode_barang_masuk' => 'required|max:255',
            'jumlah_keluar' => 'required|max:150',
            'jenis' => 'required|max:150',
            'harga' => 'required|numeric',
            
        ]);
    
    
        $barang->update($validated);
        
        $notification = [
            'message' => 'Data barang berhasil diperbaharui',
            'alert-type' => 'success'
        ];
    
        return redirect()->route('Barang')->with($notification);
    }
    }


    


   


    public function destroy($id)
    {
        $barangkeluar = BarangKeluar::findOrFail($id);
        $barangkeluar->delete();

        $notification = array(
            'message' => 'Data barang masuk berhasil dihapus',
            'alert-type' => 'success'
        );

        return redirect()->route('BarangKeluar')->with($notification);
    }

}