<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Testcontroller;
use App\Http\Controllers\PippoController;
use App\Http\Controllers\TopolinoController;
use App\Http\Controllers\PaperinoController;
use App\Http\Controllers\ClientiController;
use App\Http\Controllers\OrdiniController;
use App\Http\Controllers\FattureController;
use App\Http\Controllers\CategoryController;

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

Route::get('/test', [Testcontroller::class, 'prova']);
Route::get('/pippo', [PippoController::class, 'provapippo']);
Route::get('/topolino', [TopolinoController::class, 'provatopolino']);
Route::get('/paperino', [PaperinoController::class, 'provapaperino']);

Route::get('/clienti', [ClientiController::class, 'clienti']);
Route::get('/ordini', [OrdiniController::class, 'ordini']);
Route::get('/fatture', [FattureController::class, 'fatture']);
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');