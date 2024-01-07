<!DOCTYPE html>

<html lang="en">

    <head>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

    </head>

    <body>

        <h1 class="text-center">Data Barang</h1>

        <p class="text-center">Laporan Data Barang Tahun 2024</p>

        <br/>

        <table id="table-data" class="table table-bordered">

            <thead>

                <tr>

                    <th>NO</th>

                    <th>Tanggal Keluar</th>

                    <th>Kode Barang Keluar</th>

                    <th>Jumlah Barang Keluar</th>

                </tr>

            </thead>

            <tbody>

                @php $num = 1; @endphp

                @foreach($barang_keluar as $barangkeluar)

                    <tr>

                        <td>{{ $num++ }}</td>
                            <td>{{ $barangkeluar->tgl_keluar }}</td>
                            <td>{{ $barangkeluar->kode_barang_keluar }}</td>
                            <td>{{ $barangkeluar->jumlah_keluar }}</td>
                            <td>{{ $barangkeluar->tujuan }}</td>
                            <td>
                    </tr>

                @endforeach

                

            </tbody>

        </table>

    </body>

</html> 