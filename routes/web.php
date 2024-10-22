<?php

use App\Http\Controllers\BurgerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/',[PublicController::class, 'home']
    // return view('welcome');
)->name('welcome');


Route::get('/burgers/index',[BurgerController::class,'index'])->name('burgerIndex');
Route::get('/burger/detail/{id}', [BurgerController::class,'show'])->name('burgerDetail');
