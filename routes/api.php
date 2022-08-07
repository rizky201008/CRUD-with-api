<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/create',[NoteController::class, 'add']);
Route::post('/update',[NoteController::class, 'update']);
Route::post('/delete',[NoteController::class, 'delete']);
Route::post('/list',[NoteController::class, 'view']);
// Route::get('/list/{id}',[NoteController::class, 'detail']);