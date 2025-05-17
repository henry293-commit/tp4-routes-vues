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
    return view('welcome');
});
Route::get('/', function () {
    return view('pages.accueil');
});
Route::get('/apropos', function () {
    return view('pages.apropos');
});

Route::get('/packages', function () {
    $packages = [
        ['id' => 1, 'title' => 'Spatie', 'slug' => 'spatie'],
        ['id' => 2, 'title' => 'No Captcha', 'slug' => 'no-captcha'],
        ['id' => 3, 'title' => 'SEOTools', 'slug' => 'stools']
    ];

    return view('pages.packages.index', compact('packages'));
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/inscription-utilisateur', function () {
    return view('inscription-utilisateur');
});
