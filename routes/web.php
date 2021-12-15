<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\ConferenceController;
use App\Http\Controllers\admin\AdmConferenceController;

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

Route::get('/', [ConferenceController::class, 'list']);

Route::get('/admin', [AdmConferenceController::class, 'list']);
