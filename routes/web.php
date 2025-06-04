<?php

use Filament\Http\Responses\Auth\Contracts\LoginResponse;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return app(LoginResponse::class);
});
