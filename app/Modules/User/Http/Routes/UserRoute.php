<?php

namespace App\Modules\User\Http\Routes;

use App\Modules\User\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'authLogin']);
