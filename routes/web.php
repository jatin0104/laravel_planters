<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// career route
Route::get('/career', function () {
    return view('career');
});

Route::get('/send-email', [HomeController::class, 'sendEmail']);
