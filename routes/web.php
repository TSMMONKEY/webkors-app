<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;

// Main Pages
Route::get('/', [pageController::class, 'home'])->name('home');
Route::post('/', [QuotesController::class, 'newQUote'])->name('home.quotes');

Route::get('/about', [pageController::class, 'about'])->name('about');
Route::get('/contact', [pageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/thank_you', [pageController::class, 'thank_you'])->name('thank-you');

Route::get('/blog', [pageController::class, 'blog'])->name('blog');


// Services Group
Route::prefix('/services')->group(function () {
    Route::get('/', [ServicesController::class, 'index'])->name('services.home');
    
    Route::get('/website-design', [ServicesController::class, 'webDesign'])->name('services.webDesign');
    
    Route::get('/digital-marketing', [ServicesController::class, 'marketing'])->name('services.marketing');
    
    Route::get('/website-maintenance', [ServicesController::class, 'maintain'])->name('services.maintain');
});