<?php

use App\Http\Controllers\Api\ClienteController;
use App\Http\Controllers\Api\EntregadorController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\VeiculoController;
use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function(){
    Route::apiResource('veiculos',VeiculoController::class);
    Route::middleware(['ability:is-admin'])->group(function(){
        Route::post('/veiculos',[VeiculoController::class,'store']);
        Route::put('/veiculos/{veiculo}',[VeiculoController::class,'update']);
        Route::delete('/veiculos/{veiculo}',[VeiculoController::class,'destroy']);
    });
});


Route::apiResource('clientes',ClienteController::class);
Route::middleware(['auth:sanctum', 'ability:is-admin'])->group(function(){
    Route::post('/clientes',[ClienteController::class,'store']);
    Route::put('/clientes/{cliente}',[ClienteController::class,'update']);
    Route::delete('/clientes/{cliente}',[ClienteController::class,'destroy']);
});


Route::apiResource('entregadores',EntregadorController::class)->parameters([
    'entregadores'=>'entregador'
]);
Route::middleware(['auth:sanctum', 'ability:is-admin'])->group(function(){
    Route::post('/entregadores',[EntregadorController::class,'store']);
    Route::put('/entregadores/{entregador}',[EntregadorController::class,'update']);
    Route::delete('/entregadores/{entregador}',[EntregadorController::class,'destroy']);
    Route::get('/entregadores/{entregador}/veiculos',[EntregadorController::class,'veiculos']);
});


Route::apiResource('users',UserController::class);
Route::post('login',[LoginController::class,'login']);