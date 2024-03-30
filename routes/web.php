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

Route::get('/', function () {
    return view('welcome');
});


Route::get('products', function () {
    return view('products');
})->name('products.index');

Route::get('products/create', function () {
    return 'form to create a new product';
})->name('products.create');

Route::post('products', function () {
    return 'form to create a new product';
})->name('products.create');

// laravel 10, necesita parametro en la funcion anonima
Route::get('product/{id}', function ($id) {
    return "searching product {$id}";
})->name('products.show');

Route::get('product/{id}/edit', function ($id) {
    return "updating product {$id}";
})->name('products.edit');

// tipos de solicitud para la ruta
Route::match(['get', 'post'], 'product/{id}/edit', function() {

});