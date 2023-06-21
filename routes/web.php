<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ContactController;

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
})->name('login');

// Route::get('contact', function () {
//     return view('contact');
// });

Route::post('auth',[UserController::class,'auth']);
Route::get('register',[UserController::class,'register']);
Route::get('logout', [UserController::class,'logout']);
Route::post('register/daftar',[UserController::class,'daftar']);

Route::middleware('auth')->group(function () {
Route::get('admin',[UserController::class,'show'])->middleware('auth');
Route::get('profil',[ProfilController::class,'show']);
Route::get('insert',[ProfilController::class,'view']);
// Route::post('profil/create',[ProfilController::class,'create']);
Route::get('profil/edit/{id}',[ProfilController::class,'edit']);
Route::post('profil/update/{id}',[ProfilController::class,'update']);


Route::get('portofolio',[PortofolioController::class,'view']);
Route::get('tabel',[PortofolioController::class,'show']);
Route::get('tabel/add',[PortofolioController::class,'add']);
Route::post('tabel/create',[PortofolioController::class,'create']);
Route::get('tabel/delete/{id}',[PortofolioController::class,'hapus']);
Route::get('tabel/edit/{id}',[PortofolioController::class,'edit']);
Route::post('tabel/update/{id}',[PortofolioController::class,'update']);

Route::get('contact',[ContactController::class,'show']);
Route::get('contact/add',[ContactController::class,'add']);
Route::post('contact/create',[ContactController::class,'create']);
Route::get('contact/delete/{id}',[ContactController::class,'delete']);

    
});



