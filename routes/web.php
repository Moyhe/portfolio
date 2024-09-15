<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ResumeController;
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
    return view('home');
});


Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact');
Route::get('/resume', ResumeController::class)->name('resume.download');
