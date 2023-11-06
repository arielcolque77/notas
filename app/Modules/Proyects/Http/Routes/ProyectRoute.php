<?php

namespace App\Modules\Proyects\Http\Routes;

use App\Modules\Proyects\Http\Controllers\ProyectsController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->group(function () {
    Route::get('/getProyects', [ProyectsController::class, 'index']);
    Route::get('/finNotesOfProyects/{id}', [ProyectsController::class, 'show']);
});
