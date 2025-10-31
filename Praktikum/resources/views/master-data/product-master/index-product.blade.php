<x-app-layout>
    <div class="p-6 bg-white shadow rounded-lg">
        <h2 class="text-2xl font-bold mb-4">Daftar Produk</h2>

        {{-- Tombol Tambah Produk --}}
        <a href="{{ route('product.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block hover:bg-blue-600">
            + Tambah Produk
        </a>

     <a href="{{ route('product.export.excel') }}">
                <button
                    class="px-6 py-4 text-black bg-blue-500 border border-blue-500 rounded-lg shadow-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Export to Excel
                </button>
            </a>

        {{-- Pesan sukses --}}
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-3">
                {{ session('success') }}
            </div>
        @endif

        {{-- Tabel daftar produk --}}
        <table class="table-auto w-full border border-gray-300 text-sm">
            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="px-4 py-2 border">ID</th>
                    <th class="px-4 py-2 border">Nama Produk</th>
                    <th class="px-4 py-2 border">Unit</th>
                    <th class="px-4 py-2 border">Type</th>
                    <th class="px-4 py-2 border">Quantity</th>
                    <th class="px-4 py-2 border">Producer</th>
                    <th class="px-4 py-2 border text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr class="hover:bg-gray-50">
                        <td class="border px-4 py-2">{{ $product->id }}</td>
                        <td class="border px-4 py-2">{{ $product->product_name }}</td>
                        <td class="border px-4 py-2">{{ $product->unit }}</td>
                        <td class="border px-4 py-2">{{ $product->type }}</td>
                        <td class="border px-4 py-2">{{ $product->qty }}</td>
                        <td class="border px-4 py-2">{{ $product->producer }}</td>
                        <td class="border px-4 py-2 text-center">
                            <a href="{{ route('product.edit', $product->id) }}" 
                               class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500 mr-1">
                                Edit
                            </a>
                            <form action="{{ route('product.destroy', $product->id) }}" 
                                  method="POST" 
                                  class="inline"
                                  onsubmit="return confirm('Yakin ingin menghapus produk ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-4 text-gray-500">
                            Belum ada data produk.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
