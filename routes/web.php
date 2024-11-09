<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::resource('clients', ClientController::class);
Route::resource('projects', ProjectController::class);
