<?php
use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio',function(){
    return view('inicio');
});

Route::get('/home', [InicioController::class, 'index'])->name('home');
Route::get('/Mexico', [InicioController::class, 'in'])->name('mexico');
Route::get('/Alemania', [InicioController::class, 'i'])->name('alemania');
Route::get('/Brasil', [InicioController::class, 'n'])->name('brasil');
Route::get('/Argentina', [InicioController::class, 'd'])->name('argentina');
Route::get('/Francia', [InicioController::class, 'e'])->name('francia');

Route::get('/',[InicioController::class,'index'])->name('home');

Route::get('/padilla',[InicioController::class,'dex2']);

Route::get('/cesar',function(){
    return view('cesar');
});
Route::get('/juab',[InicioController::class,'dex']);
