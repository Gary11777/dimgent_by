<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Products
Route::get('/products', function () {
    return view('pages.products');
})->name('products');

// Services
Route::get('/services', function () {
    return view('pages.services');
})->name('services');

// Projects
Route::get('/projects', function () {
    return view('pages.projects');
})->name('projects');

// About
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

// Contacts
Route::get('/contacts', function () {
    return view('pages.contacts');
})->name('contacts');

Route::post('/contacts', [ContactController::class, 'submit'])
    ->middleware(['throttle:5,60'])
    ->name('contacts.submit');

// Sitemap
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
