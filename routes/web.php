<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

/*  Image Urls */
Route::get('/images/benezerlogo.jpg', function () {
    return response()->file(resource_path('images/benezerlogo.jpg'));
});

Route::get('/images/facebook.png', function () {
    return response()->file(resource_path('images/facebook.png'));
});

Route::get('/images/instagram.png', function () {
    return response()->file(resource_path('images/instagram.png'));
});

Route::get('/images/mobiledev-card.png', function () {
    return response()->file(resource_path('images/mobiledev-card.png'));
});

Route::get('/images/school-card.png', function () {
    return response()->file(resource_path('images/school-card.png'));
});

Route::get('/images/binus-card.png', function () {
    return response()->file(resource_path('images/binus-card.png'));
});

Route::get('/images/train-station.jpg', function () {
    return response()->file(resource_path('images/train-station.jpg'));
});

Route::get('/images/car-pic.jpg', function () {
    return response()->file(resource_path('images/car-pic.jpg'));
});

Route::get('/images/flutter.png', function () {
    return response()->file(resource_path('images/flutter.png'));
});

Route::get('/images/java.png', function () {
    return response()->file(resource_path('images/java.png'));
});


/* Views routes */
Route::get('/portfolio', function () {
    return view('portfolio');
})->name('port'); #Portfolio view

Route::get('/appdev', function () {
    return view('appdev');
})->name('appdev'); #AppDev view

Route::get('/contactme', function () {
    return view('contactme');
})->name('contact'); #AppDev view

