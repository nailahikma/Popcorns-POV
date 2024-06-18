<?php

use App\Http\Controllers\Admin\CastController;
use App\Http\Controllers\Admin\ChartController;
use App\Http\Controllers\Admin\DashController;
use App\Http\Controllers\Admin\FilmController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\KoreaController;
use App\Http\Controllers\Admin\PlatformController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ScoreController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Auth;
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

// Dashboard Admin
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
    Route::controller(DashController::class)->group(function(){
        Route::get('/home', 'admin')->name('home.admin');
    });
    Route::controller(GenreController::class)->group(function(){
        Route::get('/genre', 'index')->name('index.genre');
        Route::post('/genre/add', 'addGenre')->name('add.genre');
        Route::delete('/genre/delete', 'deleteGenre')->name('delete.genre');
    });
    Route::controller(PlatformController::class)->group(function(){
        Route::get('/platform', 'index')->name('index.platform');
        Route::post('/platform/add', 'addPlatform')->name('add.platform');
        Route::delete('/platform/delete', 'deletePlatform')->name('delete.platform');
    });
    Route::controller(CastController::class)->group(function(){
        Route::get('/cast', 'index')->name('index.cast');
        Route::post('/cast/add', 'addCast')->name('add.cast');
        Route::delete('/cast/delete', 'deleteCast')->name('delete.cast');
    });
    Route::controller(FilmController::class)->group(function(){
        Route::get('/film', 'index')->name('index.film');
        Route::get('/film/formc', 'formc')->name('formc.film');
        Route::post('/film/add', 'addFilm')->name('add.film');
        Route::get('/film/forme/{id}', 'forme')->name('forme.film');
        Route::put('/film/edit/{id}', 'editFilm')->name('edit.film');
        Route::delete('/film/delete', 'deleteFilm')->name('delete.film');
    });
    Route::controller(KoreaController::class)->group(function(){
        Route::get('/korea', 'index')->name('index.korea');
        Route::post('/korea/add', 'addKorea')->name('add.korea');
        Route::delete('/korea/delete', 'deleteKorea')->name('delete.korea');
    });
    Route::controller(ReviewController::class)->group(function(){
        Route::get('/review', 'index')->name('index.review');
        Route::post('/review/add', 'addReview')->name('add.review');
        Route::put('/film/review/{id}', 'review')->name('review.film');
        Route::delete('/review/delete', 'deleteReview')->name('delete.review');
    });
    Route::controller(ScoreController::class)->group(function(){
        Route::get('/score', 'index')->name('index.score');
        Route::post('/score/add', 'addScore')->name('add.score');
        Route::delete('/score/delete', 'deleteScore')->name('delete.score');
    });
    Route::controller(ChartController::class)->group(function(){
        Route::get('/chart', 'chart')->name('index.chart');
    });
});

// Landing Page
Route::controller(FrontController::class)->group(function () {
    Route::get('/sign-in', 'signin');
    Route::get('/sign-up', 'signup');
    Route::get('/', 'home')->name('homeA');
    Route::get('/detail/{id}', 'detail');
    Route::get('/contact-us', 'contactUs');
    Route::get('/about-us', 'aboutUs');
    Route::get('/movie', 'movie');
    Route::get('/action', 'action');
    Route::get('/romance', 'romance');
    Route::get('/drama', 'drama');
    Route::get('/fantasy', 'fantasy');
    Route::get('/search', 'search');
    Route::get('/random', 'random');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
