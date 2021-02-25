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

// Route::get('/', function () {
//     return view('pages.dashboard');
// });

// Route::get('/barang', function () {
//     return view('pages.barang');
// });

// Route::get('/barangmasuk', function () {
//     return view('pages.barangmasuk');
// });

// Route::get('/barangkel', function () {
//     return view('pages.barangkel');
// });



Route::get('/', 'DashboardController@index')->name('dashboard');



Auth::routes();

Route::resource('barang', 'BarangController');
Route::resource('barangmasuk', 'BarangmasukController');

Route::get('barang/cari', 'BarangController@cari')->name('barang.cari');
