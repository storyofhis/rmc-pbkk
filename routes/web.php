<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\MahasiswaController;

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
Route::get('/input', [FormController::class, 'input']);
Route::post('/proses', [FormController::class, 'proses']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// middleware
Route::get("/view", function () {
    return "Warga Laravel.";
})->name("view");

Route::prefix("/pegawai")->group(function () {
    Route::get("/view", function () {
        return "Pegawai Laravel.";
    });
    Route::get("/{id}", function ($id) {
        return "Pegawai dengan id: " . $id . ".";
    })->whereNumber('id');
});

Route::middleware('date')->prefix("/pegawai")->group(function () {
    Route::get("/view", function () {
        return "Pegawai Laravel.";
    });
    Route::get("/{id}", function ($id) {
        return "Pegawai dengan id: " . $id . ".";
    })->whereNumber('id');
});

//---CONTROLLER
//Cara akses pertama
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

//Cara akses kedua
//Route::get('/mahasiswa', 'MahasiswaController@index');
//Route::resource('/mahasiswa', 'MahasiswaController');