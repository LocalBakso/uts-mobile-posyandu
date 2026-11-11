<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IbuController;
use App\Http\Controllers\AnakController;

Route::apiResource('ibu', IbuController::class);
Route::apiResource('anak', AnakController::class);