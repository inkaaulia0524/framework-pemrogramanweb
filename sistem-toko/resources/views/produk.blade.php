@extends('utama')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Daftar Produk</h1>

    <table class="table-auto border-collapse border border-gray-400 w-full">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-400 px-4 py-2">ID</th>
                <th class="border border-gray-400 px-4 py-2">Nama</th>
                <th class="border border-gray-400 px-4 py-2">Deskripsi</th>
                <th class="border border-gray-400 px-4 py-2">Harga</th>
                <th class="border border-gray-400 px-4 py-2">Kategori</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border border-gray-400 px-4 py-2">1</td>
                <td class="border border-gray-400 px-4 py-2">Laptop Asus</td>
                <td class="border border-gray-400 px-4 py-2">Laptop untuk mahasiswa</td>
                <td class="border border-gray-400 px-4 py-2">Rp 8.000.000</td>
                <td class="border border-gray-400 px-4 py-2">Elektronik</td>
            </tr>
            <tr>
                <td class="border border-gray-400 px-4 py-2">2</td>
                <td class="border border-gray-400 px-4 py-2">Buku Laravel</td>
                <td class="border border-gray-400 px-4 py-2">Belajar Laravel dengan mudah</td>
                <td class="border border-gray-400 px-4 py-2">Rp 120.000</td>
                <td class="border border-gray-400 px-4 py-2">Buku</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
