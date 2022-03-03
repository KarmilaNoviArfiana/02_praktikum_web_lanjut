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
    return "Selamat Datang";
});

Route::get('/about', function () {
    return "<hr> Nim   : 2041720073 </hr> <br>
            <hr> Nama  : Karmila Novi Arfiana </hr> <br>
            <hr> Kelas : TI-2C </hr>";
});

Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID " .$id;
});