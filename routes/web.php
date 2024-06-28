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
    //milestone 2(creazione data nella rotta )
    $data_prova=[
        //dati di saluto 
        "welcome"=>"benvenuto!",
        "hello"=> "ciao",
        "goodbye"=> "Arrivederci!",
        //array supereroi
        "heroes"=>[
            "Superman",
            "Batman",
            "Paperino",
        ],
        //importo il file store che sarà da immettere nel return 
        $data=config("store"),
    ];
    //importo il data nel view
    return view('welcome',$data);
});

//creo seconda rotta per la pagina welcome
//quando metto come rotta /home
Route::get('/home',function() {
    //visualizzo il file welcome.blade.php
    return view('welcome');
});