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
                    <x-primary-button tag="a" href="{{ route('Barang.create') }}">Add</x-primary-button>
                    <br /><br />
                <x-table>
                    <x-slot name="header">
                        <tr>
                            <th>#</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jenis</th> 
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </x-slot>
                    <tr>
                        @php $num=1; @endphp
                        @foreach($barangs as $barang)
                            <td>{{$num++}}</td>
                            <td>{{$barang->kode_barang}}</td>
                            <td>{{$barang->nama_barang}}</td>
                            <td>{{$barang->jenis}}</td>
                            <td>{{$barang->harga}}</td>
                            <td>
                                <x-primary-button tag="a" href="{{route('Barang.edit', $barang->id)}}">Edit</x-primary-button>
                                <form action="{{ route('Barang.destroy', $barang->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                        
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this barang?')">Delete Barang</button>
                                </form>
                            </td>
                    </tr>
                    @endforeach
                </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
