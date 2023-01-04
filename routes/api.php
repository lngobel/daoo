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

Route::get('/veiculo',[VeiculoController::class,'index'])->middleware('auth:sanctum');
Route::get('/veiculo/{id}',[VeiculoController::class,'show'])->middleware('auth:sanctum');
Route::post('/veiculo',[VeiculoController::class,'store'])->middleware(['auth:sanctum', 'ability:is-admin']);
Route::put('/veiculo/{id}',[VeiculoController::class,'update'])->middleware(['auth:sanctum', 'ability:is-admin']);
Route::delete('/veiculo/{id}',[VeiculoController::class,'remove'])->middleware(['auth:sanctum', 'ability:is-admin']);

Route::get('/cliente',[ClienteController::class,'index']);
Route::get('/cliente/{id}',[ClienteController::class,'show']);
Route::post('/cliente',[ClienteController::class,'store'])->middleware(['auth:sanctum', 'ability:is-admin']);
Route::put('/cliente/{id}',[ClienteController::class,'update'])->middleware(['auth:sanctum', 'ability:is-admin']);
Route::delete('/cliente/{id}',[ClienteController::class,'remove'])->middleware(['auth:sanctum', 'ability:is-admin']);

Route::get('/entregador',[EntregadorController::class,'index']);
Route::get('/entregador/{id}',[EntregadorController::class,'show']);
Route::post('/entregador',[EntregadorController::class,'store'])->middleware(['auth:sanctum', 'ability:is-admin']);
Route::put('/entregador/{id}',[EntregadorController::class,'update'])->middleware(['auth:sanctum', 'ability:is-admin']);
Route::delete('/entregador/{id}',[EntregadorController::class,'remove'])->middleware(['auth:sanctum', 'ability:is-admin']);
Route::get('/entregador/{entregador}/veiculos',[EntregadorController::class,'veiculos'])->name('entregadores.veiculos');

Route::apiResource('users',UserController::class);
Route::post('login',[LoginController::class,'login']);