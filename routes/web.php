<?php

use App\Http\Controllers\AboutPage;
use App\Http\Controllers\HomePage;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomePage::class, 'index']);
Route::get('/home', [HomePage::class, 'index']);

Route::get('/about', [AboutPage::class, 'index']);
