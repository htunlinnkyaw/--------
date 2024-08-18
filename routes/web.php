<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('item', ItemController::class);
Route::resource('product', ProductController::class);
