<?php

use App\Models\Vehicle;
use Illuminate\Support\Facades\Route;

Route::get('/vehicles', function () {
    return Vehicle::all();
});