<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\catController;
Route::resource('cats', catController::class);