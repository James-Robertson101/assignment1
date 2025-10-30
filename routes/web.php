<?php
use App\Http\Controllers\OpeningController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OpeningController::class, 'index']);
Route::get('/create', [OpeningController::class, 'create']);
Route::get('/about', [OpeningController::class, 'about']);
