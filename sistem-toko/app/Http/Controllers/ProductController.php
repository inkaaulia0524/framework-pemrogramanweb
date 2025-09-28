<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */

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

    public function index()
    {
        $angka = 0; // Inisialisasi variabel $angka
        $hasil = $angka + 10; // bebas mau ditambah berapa

        return view('products.index', compact('hasil'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
