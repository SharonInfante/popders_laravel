<?php

use App\Http\Controllers\Coder\HomeCoderController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeCoderController::class, 'coderIndex']);