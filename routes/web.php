<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\ContactController;

Route::get('/Portfolio', [TestimonyController::class, 'index'])->name('portfolio');



Route::post('/testimonies', [TestimonyController::class, 'store'])->name('testimonies.store');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');