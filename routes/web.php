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
    //importo il file store che sarà da immettere nel return 
    $data=config("store");
    //importo il data nel view
    return view('welcome',$data);
    /*aggiungo il name per fare in modo
     di usare la funzione route nell'header*/
})->name("welcome");

//creo seconda rotta per la pagina welcome
//quando metto come rotta /home
Route::get('/home',function() {
    //devo importare anche qui il file store.php
    $data=config("store");
     //visualizzo il file welcome.blade.php
    return view('welcome',$data);
})->name("welcome");

//milestone 3:creazione rotta about
Route::get('/about',function(){
return view('about');
})->name("about");
