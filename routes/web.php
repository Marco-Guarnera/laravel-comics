<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Homepage
Route::get('/', function () {
    // Struttura dati
    $comics_list = config('db');
    return view('pages.home-page', compact('comics_list'));
})->name('homepage');

// Product
Route::get('/{index}', function (string $index) {
    // Struttura dati
    $comics_list = config('db');
    if (isset($comics_list[$index])) {
        $product = $comics_list[$index];
        return view('pages.product', compact('product'));
    } else {
        abort(404);
    }
})->name('product');
