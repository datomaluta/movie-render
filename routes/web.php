<?php

use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\AdminQuoteController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SessionController;
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

Route::get('/', [QuoteController::class, 'index'])->name('index');
Route::get('/quotes/{quote}', [QuoteController::class, 'show'])->name('quote');
Route::get('/movies/{movie:slug}', [MovieController::class, 'index'])->name('movie');
Route::view('/login', 'sessions.create')->name('login')->middleware('guest');
Route::post('/login', [SessionController::class, 'login'])->name('login.post');
Route::post('/logout', [SessionController::class, 'logout'])->name('logout')->middleware('auth');

Route::prefix('/admin')->group(function () {
	Route::view('/', 'admin.dashboard.index')->name('admin.index');

	Route::get('/movies', [AdminMovieController::class, 'index'])->name('admin.movies.index');
	Route::view('/movies/create', 'admin.movies.create')->name('admin.movies.create');
	Route::post('/movies', [AdminMovieController::class, 'store'])->name('admin.movies.store');

	Route::get('/movies/edit/{movie}', [AdminMovieController::class, 'edit'])->name('admin.movies.edit');
	Route::patch('/movies/{movie}', [AdminMovieController::class, 'update'])->name('admin.movies.update');
	Route::delete('/movies/{movie}', [AdminMovieController::class, 'destroy'])->name('admin.movies.delete');

	Route::get('/quotes', [AdminQuoteController::class, 'index'])->name('admin.quotes.index');
	Route::get('quotes/create', [AdminQuoteController::class, 'create'])->name('admin.quotes.create');
	Route::post('/quotes', [AdminQuoteController::class, 'store'])->name('admin.quotes.store');

	Route::get('/quotes/edit/{quote}', [AdminQuoteController::class, 'edit'])->name('admin.quotes.edit');
	Route::patch('/quotes/{quote}', [AdminQuoteController::class, 'update'])->name('admin.quotes.update');
	Route::delete('/quotes/{quote}', [AdminQuoteController::class, 'destroy'])->name('admin.quotes.delete');
});

Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch');
