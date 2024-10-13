<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\UserController;
use App\Http\Controllers\Front\ContactController;


// ruta pentru formularul de contact
Route::post('/contact', [ContactController::class, 'storeContact'])->name('contact.store');
