<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\BarangMasuk;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BarangMasukExport implements FromCollection, FromArray, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return BarangMasuk::all();

    }
    public function array(): array
    {
        return BarangMasuk::getDataBooks();
    }
    public function headings(): array
    {
        return [
            'No',
            'Tanggal Masuk',
            'Kode Barang Masuk',
            'Nama Barang',
            'Jumlah'
        ];
    }
}
