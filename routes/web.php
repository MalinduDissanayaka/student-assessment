<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// The main page with the form
Route::get('/calculator', [StudentController::class, 'index'])->name('calculator.index');

// The logic to handle the submission
Route::post('/calculate', [StudentController::class, 'calculate'])->name('calculator.calculate');