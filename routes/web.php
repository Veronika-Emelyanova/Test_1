<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('app');
});

Route::get('/contact', function () {
    return view('contact_form');
})->name('contact.index');

Route::get('/news', function () {
    return view('news.index');
});


Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact-form', [ContactController::class, 'store']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/news', [PostController::class, 'index']);
Route::get('/', [PostController::class, 'index_app']);


