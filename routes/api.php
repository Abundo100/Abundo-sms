<?php

use App\Http\Controllers\ScholarshipController;
use Illuminate\Support\Facades\Route;

Route::get('/scholarships', [ScholarshipController::class, 'index']);
Route::post('/scholarships', [ScholarshipController::class, 'store']);
Route::put('/scholarships/{id}', [ScholarshipController::class, 'update']);
Route::delete('/scholarships/{id}', [ScholarshipController::class, 'destroy']);