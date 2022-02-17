<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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
/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', function(){
    return view ('Home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function(){
    return view ('About',[
        "title" => "About",
        "nama" =>"Fahriza Fattah",
        "nama" =>"Fahriza Fattah",
        "email" => "310321@student.smktelkom-pwt.sch.id",
        "gambar" => "yaaa.jpeg"
    ]);
});
Route::get('/gallery', function(){
    return view ('Gallery', [
        "title" => "Gallery"
    ]);
}); 

Route::resource('/contacts', ContactController::class); 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
