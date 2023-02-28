<?php
use Illuminate\Support\Facades\Route;
use App\Song;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group.
|
*/

// Define a route for the home page
Route::get('/', function () {
    return view('welcome');
});

// Define a route for creating new songs
Route::post('/songs', function () {
    // Validate the incoming request data
    $data = request()->validate([
        'title' => 'required',
        'artist' => 'required',
    ]);

    // Persist the new song to the database
    App\song::create($data);

    // Redirect back to the list of songs
    return redirect('/songs');
});