<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\PagesController;



//rutele pentru paginile publice
Route::get('/', [PagesController::class, 'homePage'])->name('home');
Route::get('/shop', [PagesController::class, 'shopPage'])->name('shop');
Route::get('/contact', [PagesController::class, 'contactPage'])->name('contact');
Route::get('/servicii', [PagesController::class, 'serviciiPage'])->name('servicii');
Route::get('/despre', [PagesController::class, 'desprePage'])->name('despre');
Route::get('/search', [PagesController::class, 'searchPage'])->name('search');