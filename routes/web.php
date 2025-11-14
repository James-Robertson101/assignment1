<?php
use App\Http\Controllers\OpeningController;
use Illuminate\Support\Facades\Route;

Route::get('/', [OpeningController::class, 'index']);
Route::get('/create', [OpeningController::class, 'create']);
Route::get('/about', [OpeningController::class, 'about']);
Route::post('/openings',[OpeningController::class,'store']);
Route::get('/openings/{id}', [OpeningController::class, 'show']);
Route::get('/openings/{id}/edit', [OpeningController::class, 'edit']);
Route::patch('/openings/{id}', [OpeningController::class, 'update']);
Route::delete('/openings/{id}', [OpeningController::class, 'destroy']);
