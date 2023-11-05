<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\ProyectsController;
use App\Http\Controllers\api\NotesController;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::post('login', [AuthController::class, 'authLogin']);

Route::middleware('auth:api')->group(function () {
    Route::get('/getProyects', [ProyectsController::class, 'index']);
    Route::get('/finNotesOfProyects/{id}', [ProyectsController::class, 'show']);
    Route::post('/saveNote', [NotesController::class, 'store']);
    Route::post('/updateStatusNote', [NotesController::class, 'update']);
    Route::delete('/deleteNote/{id}', [NotesController::class, 'destroy']);
});
