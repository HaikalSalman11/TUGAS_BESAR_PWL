<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                <x-primary-button tag="a" href="{{ route('BarangMasuk.create') }}">Add</x-primary-button>

                <x-primary-button tag="a" href="{{route('BarangMasuk.print')}}">Cetak Barang Masuk</x-primary-button>

                    <br /><br />

                    <x-table>

                        <x-slot name="header">

                            <tr>

                                <th>#</th>

                                <th>Tanggal Masuk</th>

                                <th>Kode Barang Masuk</th>

                                <th>Nama Barang</th>

                                <th>Jumlah Barang Masuk</th>

                                <th>Aksi</th>

                            </tr>

                        </x-slot>

                        @php $num = 1; @endphp

                        @foreach($barang_masuk as $barangmasuk)

                        <tr>

                            <td>{{ $num++ }}</td>

                            <td>{{$barangmasuk->tgl_masuk}}</td>

                            <td>{{ $barangmasuk->kode_barang_masuk }}</td>
                            <td></td>

                            <td>{{ $barangmasuk->jumlah_masuk}}</td> 
                            
                            <td></td>

                            <td>

                                {{-- <x-primary-button tag="a" href=''barang.edit', $barang['id'])}}">Edit</x-primary-button> --}}

                                <x-primary-button tag="a" href="{{route('BarangMasuk.edit', $barangmasuk['id'])}}">Edit</x-primary-button>
                                <form action="{{ route('BarangMasuk.destroy', $barangmasuk->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this barang?')">Delete Barang</button>
                                </form>
                            </td>

                        </tr>

                        @endforeach

                    </x-table>

                

                  

                </div>

</x-app-layout>