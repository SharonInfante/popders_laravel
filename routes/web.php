<?php

use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Session\Middleware\StartSession;

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
 
Route::controller(HomeController::class)->group(function()
{
    Route::get('/', 'indexHome')->name('home');
});

Route::controller(RegisterController::class)->group(function()
{
    Route::get('/register', 'showRegister')->name('register.show');
    Route::post('/register', 'register')->name('register');
});

Route::controller(LoginController::class)->group(function()
{
    Route::get('/login', 'showLogin')->name('login.show');
    Route::post('/login', 'login')->name('login');
});

Route::middleware(['web', StartSession::class])->group(function () {
    Route::controller(SongController::class)->group(function()
    {
        Route::get('playlist', 'index')->name('playlist.index');
        Route::get('addSong', 'create')->name('addSong.create');
        Route::post('addSong','store')->name('addSong.store');
        Route::get('songDescription/{id_song}','show')->name('songDescription.show');
        Route::get('editSong/{songs}', 'edit')->name('editSong.edit');
        Route::put('editSong/{id_song}','update')->name('updateSong.update');
        Route::get('destroySong/{id_song}', 'destroy')->name('deleteSong.destroy');
    });
});
