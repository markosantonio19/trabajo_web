<?php

use Illuminate\Contracts\View\View;
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
Route::get('/paq', function () {
    return view('paquete');
});
Route::get('/servicios', function () {
    return view('servicios');
});
Route::get('/cont', function () {
    return view('contacto');
});
Route::get('/inicio-sesion', function () {
    return view('iniciar');
});