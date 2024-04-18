<?php

use App\Http\Controllers\AnimalApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/animales', [AnimalApiController::class, 'index']);
