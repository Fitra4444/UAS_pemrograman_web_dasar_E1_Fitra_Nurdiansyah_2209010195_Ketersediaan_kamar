<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\levelController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('welcome');
});

