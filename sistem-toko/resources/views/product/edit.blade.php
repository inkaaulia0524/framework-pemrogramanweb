<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit Produk') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="mb-5 text-2xl font-bold">Edit Produk</h2>

                    <form action="{{ route('product.update', $product->id) }}" method="POST" class="space-y-4">
                        @csrf
                        @method('PUT')

                        <div>
                            <label for="product_name" class="block text-sm font-medium text-gray-700">Nama Produk</label>
                            <input type="text" id="product_name" name="product_name"
                                   value="{{ old('product_name', $product->product_name) }}"
                                   class="block w-full p-2 mt-1 border rounded @error('product_name') border-red-500 @enderror">
                            @error('product_name') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="unit" class="block text-sm font-medium text-gray-700">Unit</label>
                            <select id="unit" name="unit" class="block w-full p-2 mt-1 border rounded">
                                <option value="kg" {{ old('unit', $product->unit) == 'kg' ? 'selected' : '' }}>Kilogram (kg)</option>
                                <option value="ltr" {{ old('unit', $product->unit) == 'ltr' ? 'selected' : '' }}>Liter (ltr)</option>
                                <option value="pcs" {{ old('unit', $product->unit) == 'pcs' ? 'selected' : '' }}>Pieces (pcs)</option>
                                <option value="box" {{ old('unit', $product->unit) == 'box' ? 'selected' : '' }}>Box</option>
                            </select>
                            @error('unit') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                            <input type="text" id="type" name="type"
                                   value="{{ old('type', $product->type) }}"
                                   class="block w-full p-2 mt-1 border rounded">
                        </div>

                        <div>
                            <label for="information" class="block text-sm font-medium text-gray-700">Information</label>
                            <textarea id="information" name="information" rows="3"
                                      class="block w-full p-2 mt-1 border rounded">{{ old('information', $product->information) }}</textarea>
                        </div>

                        <div>
                            <label for="qty" class="block text-sm font-medium text-gray-700">Quantity</label>
                            <input type="number" id="qty" name="qty" min="0" step="1"
                                   value="{{ old('qty', $product->qty) }}"
                                   class="block w-full p-2 mt-1 border rounded">
                            @error('qty') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
                        </div>

                        <div>
                            <label for="producer" class="block text-sm font-medium text-gray-700">Producer</label>
                            <input type="text" id="producer" name="producer"
                                   value="{{ old('producer', $product->producer) }}"
                                   class="block w-full p-2 mt-1 border rounded">
                        </div>

                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Simpan Perubahan</button>
                        <a href="{{ route('product.index') }}" class="px-4 py-2 ml-2 border rounded">Batal</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
