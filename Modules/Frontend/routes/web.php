<?php

use Illuminate\Support\Facades\Route;
use Modules\Frontend\Http\Controllers\FrontendController;
use Modules\Frontend\Http\Controllers\HomePageController;
use Modules\Frontend\Http\Controllers\TentangkamiController;
use Modules\Frontend\Http\Controllers\WakafTanahController;

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


Route::name('Frontend')->get('/',function(){
     return view('frontend::index');
});
Route::name('Wakaftanah')->get('/Wakaftanah',function(){
     return view('frontend::Wakaf_tanah');
});
Route::name('berita')->get('/berita',function(){
     return view('frontend::berita');
});
Route::name('Tentang-kami')->get('/Tentang-kami',function(){
     return view('frontend::Tentang_kami');
});
Route::name('Galleri')->get('/Galleri',function(){
     return view('frontend::galleri');
});
Route::name('donasi')->get('/donasi',function(){
     return view('frontend::program');
});
