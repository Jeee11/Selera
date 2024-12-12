<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomepageController::class,'index'])->name('home');
Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::get('/about', [AboutController::class,'index'])->name('about');
