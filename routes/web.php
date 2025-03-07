<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'index'])->name('index');

Route::get('/about', [SiteController::class,'about'])->name('about');
Route::get('/contact', [SiteController::class,'contact'])->name('contact');
Route::get('/work', [SiteController::class,'JobDetails'])->name('workdetails');
Route::get('/job', [SiteController::class,'JobListings'])->name('joblistings');
