<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

public function store(Request $request )
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

        return redirect()->route('product.create')->with('success', 'Product created successfully.');
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

    public function create()
    {
        return view('master-data.product-master.create-product');
    }

   public function index()
    {
        $data = Product::all();
        return view('master-data.product-master.index-product', compact(var_name: 'data'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
         $product = \App\Models\Product::findOrFail($id);
         return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        return view('master-data.product-master.edit-product', compact('product'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);
    $product->update($request->all());

    return redirect()->route('product.index')->with('success', 'Produk berhasil diperbarui!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->route('product.index')->with('success', 'Produk berhasil dihapus');
}

}
