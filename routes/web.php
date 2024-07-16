<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return redirect('/page1');
});

Route::get('/page1', function() {
    return view('troweld-html.page1');
}) ->name('page1');

Route::get('/page2', function() {
    return view('troweld-html.page2');
}) ->name('page2');

Route::get('/page3', function() {
    return view('troweld-html.page3');
}) ->name('page3');

Route::get('/page4', function() {
    return view('troweld-html.page4');
}) ->name('page4');

Route::get('/page5', function() {
    return view('troweld-html.page5');
}) ->name('page5');

Route::get('/register', function() {
    return view('register');
}) ->name('register');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


use App\Http\Controllers\ProfileController;
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::put('/profile/update-image', [ProfileController::class, 'updateImage'])->name('profile.update.image');
Route::put('/profile/update-portfolio', [ProfileController::class, 'updatePortfolio'])->name('profile.update.portfolio');