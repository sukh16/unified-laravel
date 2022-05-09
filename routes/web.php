<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('frontend.index');
// });
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/career', [CareerController::class, 'career'])->name('career');
Route::get('/contact-us', [ContactController::class, 'contact_us'])->name('contact_us');
Route::post('/contact-page-form', [ContactController::class, 'contact_page_form'])->name('contact_page_form');
Route::get('/about', [AboutController::class, 'About'])->name('About');