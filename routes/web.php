<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/donation', [HomeController::class, 'donation'])->name('donation');
Route::get('/pujas', [HomeController::class, 'pujas'])->name('pujas');
Route::get('/puja-videos', [HomeController::class, 'pujaVideos'])->name('puja-videos');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
