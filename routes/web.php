<?php

use App\Http\Controllers\aboutcon;
use App\Http\Controllers\contactcon;
use App\Http\Controllers\homecon;
use App\Http\Controllers\projectcon;
use Illuminate\Support\Facades\Route;

Route::get('/',[homecon::class, "index"] );
Route::get('about',[aboutcon::class, "index"] );
Route::get('contact',[contactcon::class, "index"] );
Route::get('projec',[projectcon::class, "index"] );
