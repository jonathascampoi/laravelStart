<?php

use App\Http\Controllers\PrevisaoDeGastosController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/user', [UserController::class, 'get'])->middleware('auth:api');
Route::get('/users', [UserController::class, 'list'])->middleware('auth:api');
Route::post('/user', [UserController::class, 'create'])->middleware('auth:api');
Route::delete('/user/{id}', [UserController::class, 'delete'])->middleware('auth:api');
Route::put('/user/{id}', [UserController::class, 'edit'])->middleware('auth:api');

Route::get('/previsao/{id}', [PrevisaoDeGastosController::class, 'get'])->middleware('auth:api');
Route::get('/previsoes', [PrevisaoDeGastosController::class, 'list'])->middleware('auth:api');
Route::post('/previsao', [PrevisaoDeGastosController::class, 'create'])->middleware('auth:api');
Route::delete('/previsao/{id}', [PrevisaoDeGastosController::class, 'delete'])->middleware('auth:api');
Route::put('/previsao/{id}', [PrevisaoDeGastosController::class, 'edit'])->middleware('auth:api');