<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;

Route::get('/', function () 
{
    return view('welcome');
});

Route::resource('hospitals', HospitalController::class);
Route::resource('doctors', DoctorController::class);
Route::resource('patients', PatientController::class);