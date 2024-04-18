<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\QueryController;



Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/faq', [HomeController::class, 'faq']);
Route::get('/login', [HomeController::class, 'login']);
Route::get('/register', [HomeController::class, 'register']);
Route::get('/forget-password', [HomeController::class, 'forgetPassword']);
Route::get('/logout', [HomeController::class, 'logout']);


Route::name('main.')
     ->prefix('main')
     ->middleware(['loginauth'])
     ->group(function () {
    Route::get('/', [MainController::class, 'index']);
    Route::get('/draft', [MainController::class, 'draft']);
    Route::get('/activity', [MainController::class, 'activity']);
    Route::get('/top-tags', [MainController::class, 'topTags']);
    Route::get('/top-queries', [MainController::class, 'topQueries']);
    Route::get('/account', [MainController::class, 'account']);
    Route::get('/subscription', [MainController::class, 'subscription']);
    Route::get('/my-queries', [MainController::class, 'myQueries']);
    Route::get('/my-responses', [MainController::class, 'myResponses']);


    Route::get('/tag/{tagName}', [QueryController::class,'findByTagName']);
    Route::get('/publish-query/{qid}', [QueryController::class,'publishQuery']);
    Route::get('/query/{qid}', [QueryController::class,'openQuery']);


    // Post
    Route::post('/add-query',[QueryController::class,'addQuery'])->name('addQuery');
});
// Post
Route::post('register', [HomeController::class,'saveInfo'])->name('register');
Route::post('login', [HomeController::class,'auth'])->name('login');