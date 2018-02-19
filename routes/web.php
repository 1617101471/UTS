<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('karyawan','KaryawanController');
Route::resource('transaksi','TransaksiController');
Route::resource('stok','StokbarangController');
Route::resource('penjualan','PenjualanController');
Route::resource('pembelian','PembelianController');
Route::resource('barang','BarangController');
Route::resource('parkiran','ParkiranController');
Route::resource('supplier','SupplierController');
Route::resource('penjaga','PenjagaController');
Route::resource('pemesanan','PemesananController');
Route::resource('pengiriman','PengirimanController');