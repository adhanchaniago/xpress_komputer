<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Web_Controller
Route::get('/', 'WebController@index') ;
Route::get('/konfirmasi', 'WebController@konfirmasi') ;
Route::get('/search', 'WebController@search') ;
Route::get('/keranjang', 'WebController@keranjang') ;

//Barang
Route::get('/barang', 'BarangController@index') ;
Route::get('/barang/create', 'BarangController@create') ;
Route::get('/barang/update', 'BarangController@update') ;
Route::get('/barang/delete', 'BarangController@delete') ;

//transaksi
Route::get('/transaksi', 'TransaksiController@index') ;
Route::get('/transaksi/create', 'TransaksiController@create') ;
Route::get('/transaksi/update', 'TransaksiController@update') ;
Route::get('/transaksi/delte', 'TransaksiController@delete') ;

//Pegawai
Route::get('/pegawai', 'PegawaiController@index') ;
Route::get('/pegawai/create', 'PegawaiController@create') ;
Route::get('/pegawai/update', 'PegawaiController@update') ;
Route::get('/pegawai/delete', 'PegawaiController@delete') ;

//Pembeli
Route::get('/pembeli', 'PembeliController@index') ;
// Route::get('/pembeli/create', 'PembeliController@create') ;
Route::get('/pembeli/update', 'PembeliController@update') ;
Route::get('/pembeli/delete', 'PembeliController@delete') ;
// Route::get('/pembeli/register', 'PembeliController@register') ;
Route::get('/pembeli/setting', 'PembeliController@setting') ;
