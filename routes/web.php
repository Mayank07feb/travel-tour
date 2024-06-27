<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/packages', [HomeController::class, 'packages'])->name('packages');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/destination', [HomeController::class, 'destination'])->name('destination');
Route::get('/tour', [HomeController::class, 'tour'])->name('tour');
Route::get('/booking', [HomeController::class, 'booking'])->name('booking');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/guides', [HomeController::class, 'guides'])->name('guides');
Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');
Route::get('/page404', [HomeController::class, 'page404'])->name('page404');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/myprofile', [HomeController::class, 'myprofile'])->name('myprofile');