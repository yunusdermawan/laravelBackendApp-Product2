<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/list', [ProductController::class, 'index']);
Route::get('/detail/{id}', [ProductController::class, 'showDataById']);
Route::post('/add', [ProductController::class, 'add']);
Route::put('/edit/{id}', [ProductController::class, 'edit']);
Route::delete('/delete/{id}', [ProductController::class, 'delete']);

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
