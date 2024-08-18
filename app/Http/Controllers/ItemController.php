<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::paginate(5);
        return view('index', compact('items'));
    }

    // php artisan vendor:publish --tag=laravel-pagination , to create laravel pangination assets

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {

        if ($request->image) {
            $file = $request->image;
            $newName = "item_image" . uniqid() . "." . $file->extension();
            $file->storeAs("public/item_images", $newName);
        }

        $item = new Item();
        $item->name = $request->name;
        $item->image = $newName;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->description = $request->description;
        $item->status = $request->status;
        $item->category_id = $request->category_id;
        $item->save();

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view('edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->description = $request->description;
        $item->status = $request->status;
        $item->category_id = $request->category_id;
        if ($request->image) {
            $file = $request->image;
            $newName = "item_images" . uniqid() . "." . $file->extension();
            $file->storeAs("public/item_images", $newName);
            $item->image = $newName;
        }

        $item->update();
        return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}
