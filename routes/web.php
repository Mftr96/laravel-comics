<?php

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

//creo seconda rotta per la pagina welcome
//quando metto come rotta /home
Route::get('/home',function() {
    //visualizzo il file welcome.blade.php
    return view('welcome');
});