<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


////////////////////////////////////////////////////
// Cara Akses API
// ketik Localhost:8000/api/routenya
// Contoh: localhost:8000/api/tempatmakan/
///////////////////////////////////////////////////

//route Tempat Makan
Route::get('/tempatmakan', 'tempatmakanCtrl@index');
Route::get('/tempatmakan/editform/{id}','tempatmakanCtrl@editform');
Route::post('/tempatmakan/edit/{id}','tempatmakanCtrl@editform');
Route::get('/tempatmakan/delete/{id}','tempatmakanCtrl@DeleteTempatMakan');
Route::post('/tempatmakan/tambah','tempatmakanCtrl@tambah');

//Route Menu Makanan
Route::get('/menumakan/{id}','menumakananCtrl@index');
Route::get('/menumakan/lihatsemua','menumakananCtrl@lihatsemuamenu');
Route::post('/menumakan/tambah','menumakananCtrl@tambah');
Route::post('/menumakan/edit/{id}','menumakananCtrl@update');
Route::get('/menumakan/delete/{id}','menumakananCtrl@delete');

//Route Jenis Makanan
Route::get('/jenismakanan','jenismakananCtrl@index');
Route::post('/jenismakanan/tambah','jenismakananCtrl@tambah');
Route::post('/jenismkanan/delete/{id}','jenismakananCtrl@delete');

//Route Pemilik
Route::get('/pemilik/{id}','pemilikCtrl@tempatpemilik');
Route::post('/pemilik/login','pemilikCtrl@loginpemilik');
