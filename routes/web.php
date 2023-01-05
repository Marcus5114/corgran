<?php

use App\Http\Controllers\ColegiadoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


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
    return view('mantenimiento');
});

Route::get('/sitio', function () {
    return view('index');
});

Route::get('/documentos', [DocumentoController::class, 'index']);



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::resource('prueba', PruebaController::class);
});
