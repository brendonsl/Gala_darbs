<?php

use App\Models\Job;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// All Jobs
Route::get('/', [JobController::class, 'index']);


// show create Form
Route::get('/Jobs/create', [JobController::class, 'create']);

// Single Job
Route::get('/Jobs/{Job}', [JobController::class, 'show']);