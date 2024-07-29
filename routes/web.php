<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;

Route::get('/', function () {
    return redirect('/weather');
});

Route::match(["get", "post"], 'weather', [WeatherController::class, "index"])->name("weather.form");