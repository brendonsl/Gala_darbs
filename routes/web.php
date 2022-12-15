<?php

use App\Models\Job;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;


// All Jobs
Route::get('/', [JobController::class, 'index']);


// show create Form
Route::get('/Jobs/create', [JobController::class, 'create']);

// Store Job data
Route::post('/Jobs', [JobController::class, 'store']);


// Single Job
Route::get('/Jobs/{Job}', [JobController::class, 'show']);