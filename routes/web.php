<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;

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
Route::get('/login', [HomeController::class, 'login'])->name('login'); // Login form route
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register'); // Registration form route
Route::post('/register', [RegisterController::class, 'register'])->name('register.post'); // Registration form submission route
Route::post('/login', [LoginController::class, 'loginUser'])->name('login.post'); // Login form submission route
Route::get('/myprofile', [HomeController::class, 'myprofile'])->name('myprofile'); // User profile route
Route::get('/inbox', [HomeController::class, 'inbox'])->name('inbox');
Route::get('/notifications', [HomeController::class, 'notifications'])->name('notifications');
Route::get('/accountsetting', [HomeController::class, 'accountsetting'])->name('accountsetting');

Route::post('profile/update', [ProfileController::class, 'updateProfile'])->name('profile.update');

// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); // Display login form
Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');


// Country Start

Route::get('/india', [HomeController::class, 'india'])->name('india');

//India City Start

Route::get('/kashmir', [HomeController::class, 'kashmir'])->name('kashmir');
Route::get('/rajasthan', [HomeController::class, 'rajasthan'])->name('rajasthan');