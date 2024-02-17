<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Product::get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->nama = $request->nama;
        $product->harga = $request->harga;
        $product->stok = $request->stok;
        $product->save();

        return redirect(route('produk'))->with(['success' => "Produk  $product->nama  berhasil di simpan"]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::find($id);

        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->nama = $request->nama;
        $product->harga = $request->harga;
        $product->stok = $request->stok;
        $product->save();
        return redirect(route('produk'))->with(['success' => "Produk  $product->nama  berhasil di ubah"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $nama = $product->nama;
        $product->delete();
        return redirect(route('produk'))->with(['success' => "Produk  $nama  berhasil di hapus"]);
    }
}
