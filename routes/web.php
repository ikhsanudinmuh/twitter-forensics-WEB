<?php

use App\Http\Controllers\ForensicController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [ForensicController::class, 'index']);
Route::get('/twitter/{id}', [ForensicController::class, 'pullTwitter']);
Route::get('/twitter/chat/{id}', [ForensicController::class, 'showTwitterChat']);
Route::get('/twitter/user/{id}', [ForensicController::class, 'showTwitterUser']);