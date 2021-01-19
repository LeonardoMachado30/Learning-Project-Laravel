<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $nome = "Flavio";

    $arr = [10,20,4555,2,5];

    $nomes = ["flavio", "Lais", "Rodrigo", "Joao"];

    return view('welcome', [
        'nome' => $nome,
        'arr' => $arr,
        'nomes' => $nomes
        ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/product', function () {
    return view('product');
});

