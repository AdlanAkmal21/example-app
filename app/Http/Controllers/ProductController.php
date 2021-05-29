<?php

namespace App\Http\Controllers;

//Setiap Model yang nak guna dalam Controller, mesti declare dahulu di atas.
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all data dari table products (Product) and assign kepada $products.
        $products = Product::all();

        // Return page index.blade.php. Compact function untuk pass variables kepada view/page.
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Return page create.blade.php.
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create new record dalam table products/ create new Product object. Then assign kepada $product.
        $product = new Product();

        // Assign value dari form menggunakan Request.
        $product->productName = $request->get('productName');
        $product->productPrice = $request->get('productPrice');

        // Save data kepada DB. Make sure yang ni jangan lupa ye.
        $product->save();

        // Selepas save data kepada DB, terus redirect kepada page guna route(). with() function untuk pass message (optional).
        return redirect()->route('products.index')->with('success', 'Product added.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        // Return page show.blade.php. Compact variable $product into view/page.
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // Return page edit.blade.php. Compact variable $product into view/page.
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // Assign value dari form menggunakan Request kepada $product untuk update value lama.
        $product->productName = $request->get('productName');
        $product->productPrice = $request->get('productPrice');

        // Once dah assign value baru, make sure untuk save().
        $product->save();

        // After update, redirect kepada page index menggunakan route().
        return redirect()->route('products.index')->with('success', 'Product Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // Untuk delete resource terus guna function delete().
        $product->delete();

        // Lepas delete, redirect kepada page index menggunakan route().
        return redirect()->route('products.index')->with('success', 'Product Deleted.');
    }
}
