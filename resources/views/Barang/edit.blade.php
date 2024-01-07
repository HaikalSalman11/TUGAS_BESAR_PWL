<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Data Barang') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="post" action="{{ route('Barang.update', $barang->id) }}" enctype="multipart/form-data" class="mt-6 space-y-6">
                        @csrf
                        @method('PUT') <!-- Perlu menggunakan metode PUT untuk update -->

                        <div class="max-w-xl">
                            <x-input-label for="title" value="Kode Barang" />
                            <x-text-input id="kode_barang" type="text" name="kode_barang" class="mt-1 block w-full" value="{{ $barang->kode_barang }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('kode_barang')" />
                        </div>
                        <div class="max-w-xl">
                            <x-input-label for="title" value="Nama Barang" />
                            <x-text-input id="nama_barang" type="text" name="nama_barang" class="mt-1 block w-full" value="{{ $barang->nama_barang }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('nama_barang')" />
                        </div>
                        <div class="max-w-xl">
                            <x-input-label for="title" value="Jenis" />
                            <x-text-input id="jenis" type="text" name="jenis" class="mt-1 block w-full" value="{{ $barang->jenis }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('jenis')" />
                        </div>
                        <div class="max-w-xl">
                            <x-input-label for="quantity" value="Harga" />
                            <x-text-input id="harga" type="number" name="harga" class="mt-1 block w-full" value="{{ $barang->harga }}" required />
                            <x-input-error class="mt-2" :messages="$errors->get('harga')" />
                        </div>

                        <x-secondary-button tag="a" href="{{ route('Barang') }}">Cancel</x-secondary-button>
                        <x-primary-button name="save_and_create" value="true">Save & Create Another</x-primary-button>
                        <x-primary-button name="save" value="true">Save</x-primary-button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>