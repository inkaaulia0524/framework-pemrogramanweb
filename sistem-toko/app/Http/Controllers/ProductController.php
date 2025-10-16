<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'product_name' => 'required|string|max:255',
            'unit' => 'required|string|max:100',
            'type' => 'required|string|max:100',
            'information' => 'nullable|string',
            'qty' => 'required|integer|min:0',
            'producer' => 'required|string|max:255',
        ]);

        Product::create($validatedData);

        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }
    public function create()
    {
        return view('master-data.product-master.create-product');
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'product_name' => 'required|string|max:255',
            'unit' => 'required|string|max:100',
            'type' => 'required|string|max:100',
            'information' => 'nullable|string',
            'qty' => 'required|integer|min:0',
            'producer' => 'required|string|max:255',
        ]);

        $product = Product::findOrFail($id);
        $product->update($validatedData);

        return redirect()->route('product.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }

    public function cekAngka($angka)
    {
        if ($angka % 2 == 0) {
            $message = "Nilai $angka adalah Genap";
            $type = "success";
        } else {
            $message = "Nilai $angka adalah Ganjil";
            $type = "warning";
        }

        return view('produk', compact('message', 'type'));
    }
}
