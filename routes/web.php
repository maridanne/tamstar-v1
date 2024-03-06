<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassificationController;
use App\Http\Controllers\EstablishmentController;

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

Route::get('/classifications', [ClassificationController::class, 'index'])->name('classifications.index');
Route::get('/classifications/create', [ClassificationController::class, 'create'])->name('classifications.create');
Route::get('/classifications/post', [ClassificationController::class, 'store'])->name('classifications.store');
Route::get('/establishments', [EstablishmentController::class, 'index'])->name('establishments.index');
Route::get('/establishments/create', [EstablishmentController::class, 'create'])->name('establishments.create');
Route::get('/establishments/post', [EstablishmentController::class, 'store'])->name('establishments.store');