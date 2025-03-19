<?php
use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio',function(){
    return view('inicio');
});

Route::get('/home',[InicioController::class,'index']);

Route::get('/padilla',[InicioController::class,'dex2']);

Route::get('/cesar',function(){
    return view('cesar');
});
Route::get('/juab',[InicioController::class,'dex']);
