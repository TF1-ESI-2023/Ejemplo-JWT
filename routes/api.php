<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BebidaController;

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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh',[AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
});

Route::prefix('v1')->group(function(){
    Route::get('bebida',[BebidaController::class, 'Listar']);
    Route::get('bebida/{d}',[BebidaController::class, 'Obtener']);
    Route::post('bebida',[BebidaController::class, 'Crear']) -> middleware(api::class);
    Route::put('bebida/{d}',[BebidaController::class, 'Actualizar']) -> middleware(api::class); 
    Route::delete('bebida/{d}',[BebidaController::class, 'Borrar']) -> middleware(api::class);
});


