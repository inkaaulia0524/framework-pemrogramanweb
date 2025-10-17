<x-app-layout>
    <div class="max-w-3xl mx-auto mt-10 bg-white rounded-2xl shadow-md p-8">
        <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Update Product</h2>

        <form action="{{ route('product.update', $product->id) }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            {{-- Product Name --}}
            <div>
                <label class="block text-gray-700 font-medium mb-2">Product Name:</label>
                <input 
                    type="text" 
                    name="product_name" 
                    value="{{ $product->product_name }}" 
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-indigo-200 focus:outline-none"
                    required
                >
            </div>

            {{-- Unit --}}
            <div>
                <label class="block text-gray-700 font-medium mb-2">Unit:</label>
                <select 
                    name="unit" 
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-indigo-200 focus:outline-none"
                    required
                >
                    <option value="Kg" {{ $product->unit == 'Kg' ? 'selected' : '' }}>Kilogram (Kg)</option>
                    <option value="Liter" {{ $product->unit == 'Liter' ? 'selected' : '' }}>Liter (ltr)</option>
                    <option value="Pcs" {{ $product->unit == 'Pcs' ? 'selected' : '' }}>Pieces (Pcs)</option>
                </select>
            </div>

            {{-- Type --}}
            <div>
                <label class="block text-gray-700 font-medium mb-2">Type:</label>
                <input 
                    type="text" 
                    name="type" 
                    value="{{ $product->type }}" 
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-indigo-200 focus:outline-none"
                >
            </div>

            {{-- Information --}}
            <div>
                <label class="block text-gray-700 font-medium mb-2">Information:</label>
                <textarea 
                    name="information" 
                    rows="3" 
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-indigo-200 focus:outline-none"
                >{{ $product->information }}</textarea>
            </div>

            {{-- Quantity --}}
            <div>
                <label class="block text-gray-700 font-medium mb-2">Quantity (Qty):</label>
                <input 
                    type="number" 
                    name="qty" 
                    value="{{ $product->qty }}" 
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-indigo-200 focus:outline-none"
                    required
                >
            </div>

            {{-- Producer --}}
            <div>
                <label class="block text-gray-700 font-medium mb-2">Producer:</label>
                <input 
                    type="text" 
                    name="producer" 
                    value="{{ $product->producer }}" 
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-indigo-200 focus:outline-none"
                >
            </div>

            {{-- Submit Button --}}
            <div class="flex justify-end">
                <button 
                    type="submit" 
                    class="px-5 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition"
                >
                    Update Product
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
