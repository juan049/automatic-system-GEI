<?php

use App\Http\Controllers\RawMaterialController;
use App\Models\RawMaterial;
use Illuminate\Support\Facades\Route;

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Altas de quimicos
Route::get('/insumo/alta', [RawMaterialController::class, 'create'])->named('insumo.create');
Route::post('/insumo', [RawMaterialController::class, 'store'])->name('insumo.store');