<?php

use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
 
Route::controller(Controller::class)->group(function()
{
    Route::get('/', 'home')->name('home');
    Route::get('login', 'login')->name('login');
    Route::get('register', 'register')->name('register');
});


Route::controller(SongController::class)->group(function()
{
    Route::get('playlist', 'index')->name('playlist.index');
    Route::get('addSong', 'create')->name('addSong.create');
    Route::post('addSong','store')->name('addSong.store');
    Route::get('songDescription/{id_song}','show')->name('songDescription.show');
    Route::get('editSong/{songs}', 'edit')->name('editSong.edit');
    // Route::put('editSong/{id_song}','update')->name('updateSong.update');
});

?>
