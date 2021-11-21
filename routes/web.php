<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function(){return view('home');});
Route::get('/new', function(){ return view('form');});