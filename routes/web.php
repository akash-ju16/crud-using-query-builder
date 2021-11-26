<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){return view('home');})->name('homepg');
Route::get('/new', function(){ return view('form');})->name('formpg');
Route::post('/new', [RegistrationController::class, 'store'])->name('newstroe');

Route::get('/show', [RegistrationController::class, 'index'])->name('showpg');