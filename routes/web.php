<?php

use App\Http\Controllers\ContinentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/continents');
});

Route::resource('/continents', ContinentController::class);
