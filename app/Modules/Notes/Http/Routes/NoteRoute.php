<?php

namespace App\Modules\Notes\Http\Routes;

use App\Modules\Notes\Http\Controllers\NotesController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->group(function () {
    Route::post('/saveNote', [NotesController::class, 'store']);
    Route::post('/updateStatusNote', [NotesController::class, 'update']);
    Route::delete('/deleteNote/{id}', [NotesController::class, 'destroy']);
});
