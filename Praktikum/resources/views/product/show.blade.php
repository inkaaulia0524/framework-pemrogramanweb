<x-app-layout>
    <div class="p-6 bg-gray-800 text-white rounded-lg">
        <h2 class="text-lg font-bold">Detail Produk</h2>
        <p><strong>Nama Produk:</strong> {{ $product->name }}</p>
        <p><strong>Harga:</strong> Rp {{ $harga }}</p>
        <p><strong>Stok:</strong> {{ $stok }}</p>
        <p><strong>Perhitungan:</strong> {{ $harga }} + {{ $stok }} = <b>{{ $hasil }}</b></p>

        <a href="{{ route('products.index') }}" class="text-blue-400">← Kembali ke daftar produk</a>
    </div>
</x-app-layout>
