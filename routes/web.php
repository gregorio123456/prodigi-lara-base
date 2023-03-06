<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Testcontroller;
use App\Http\Controllers\PippoController;
use App\Http\Controllers\TopolinoController;
use App\Http\Controllers\PaperinoController;
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