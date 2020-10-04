<?php


use Illuminate\Support\Facades\Route;

Route::view('/', 'app.index');
Route::view('/admin', 'app.backend');
