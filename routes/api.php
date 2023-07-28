<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyAPI;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('all-data/{id?}',[DummyAPI::class, 'allData']);

Route::middleware('auth:sanctum')->get('users',[DummyAPI::class, 'index']);

Route::get('users',[DummyAPI::class, 'index']);
Route::get('user/show/{id}',[DummyAPI::class, 'show']);
Route::post('user/store',[DummyAPI::class, 'store']);
Route::put('user/update/{id}',[DummyAPI::class, 'update']);
Route::delete('user/delete/{id}',[DummyAPI::class, 'destroy']);
Route::get('user/{name}',[DummyAPI::class, 'searchData']);
Route::post('register',[UserController::class, 'register']);

Route::get('admin',[UserController::class, 'admin']);
