<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\topscoresController;
use App\Http\Controllers\standingController;

Route::get('/topscore', [topscoresController::class, 'topscores']);
Route::get('/standing', [standingController::class, 'standings']);