<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        foreach ($products as $product) {
            $product->product_images = json_decode($product->product_images);
        }
        return view('product.index', compact('products'));
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
    public function store(StoreProductRequest $request)
    {

        $images = [];

        if ($request->images) {
            foreach ($request->file('images') as $file) {
                $newName = "product_image" . uniqid() . "." . $file->extension();
                $file->storeAs('public/product_images', $newName);
                $images[] = $newName;
            }
        }

        $product = new Product();
        $product->product_images = json_encode($images);
        $product->save();

        return redirect()->route('product.index');


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
    public function edit(Product $product)
    {
        $products = $product->product_images = json_decode($product->product_images);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $images = [];

        if ($request->images) {
            foreach ($request->file('images') as $file) {
                $newName = "product_image" . uniqid() . "." . $file->extension();
                $file->storeAs("public/product_images", $newName);
                $images[] = $newName;
            }
            $product->product_images = json_encode($images);
        }

        $product->update();

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
