<?php

use App\Http\Controllers\Api\ClienteController;
use App\Http\Controllers\Api\EntregadorController;
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

Route::get('/veiculo',[VeiculoController::class,'index']);
Route::get('/veiculo/{id}',[VeiculoController::class,'show']);
Route::post('/veiculo',[VeiculoController::class,'store']);
Route::put('/veiculo/{id}',[VeiculoController::class,'update']);
Route::delete('/veiculo/{id}',[VeiculoController::class,'remove']);

Route::get('/cliente',[ClienteController::class,'index']);
Route::get('/cliente/{id}',[ClienteController::class,'show']);
Route::post('/cliente',[ClienteController::class,'store']);
Route::put('/cliente/{id}',[ClienteController::class,'update']);
Route::delete('/cliente/{id}',[ClienteController::class,'remove']);

Route::get('/entregador',[EntregadorController::class,'index']);
Route::get('/entregador/{id}',[EntregadorController::class,'show']);
Route::post('/entregador',[EntregadorController::class,'store']);
Route::put('/entregador/{id}',[EntregadorController::class,'update']);
Route::delete('/entregador/{id}',[EntregadorController::class,'remove']);
Route::get('/entregador/{entregador}/veiculos',[EntregadorController::class,'veiculos'])->name('entregadores.veiculos');