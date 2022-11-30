<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EntregadorController;
use App\Http\Controllers\VeiculoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola', [HomeController::class,'index']); 


Route::get('/clientes', [ClienteController::class,'index']); 
Route::get('/clientes/{id}',[ClienteController::class,'show']);
Route::get('/criarCliente', [ClienteController::class,'create']);
Route::post('/criarCliente', [ClienteController::class,'store']);
Route::get('/cliente/{id}/edit', [ClienteController::class,'edit'])->name('editCli');
Route::post('/cliente/{id}/update', [ClienteController::class,'update'])->name('updateCli');
Route::get('/cliente/{id}/delete', [ClienteController::class,'delete'])->name('deleteCli');
Route::post('/cliente/{id}/delete', [ClienteController::class,'remove'])->name('removeCli');

Route::get('/entregadores', [EntregadorController::class,'index']); 
Route::get('/entregadores/{id}', [EntregadorController::class,'show']); 
Route::get('/criarEntregador', [EntregadorController::class,'create']);
Route::post('/criarEntregador', [EntregadorController::class,'store']);
Route::get('/entregador/{id}/edit', [EntregadorController::class,'edit'])->name('editEnt');
Route::post('/entregador/{id}/update', [EntregadorController::class,'update'])->name('updateEnt');
Route::get('/entregador/{id}/delete', [EntregadorController::class,'delete'])->name('deleteEnt');
Route::post('/entregador/{id}/delete', [EntregadorController::class,'remove'])->name('removeEnt');

Route::get('/veiculos', [VeiculoController::class,'index']); 
Route::get('/veiculos/{id}', [VeiculoController::class,'show']);
Route::get('/criarVeiculo', [VeiculoController::class,'create']);
Route::post('/criarVeiculo', [VeiculoController::class,'store']);
Route::get('/veiculo/{id}/edit', [VeiculoController::class,'edit'])->name('editVei');
Route::post('/veiculo/{id}/update', [VeiculoController::class,'update'])->name('updateVei');
Route::get('/veiculo/{id}/delete', [VeiculoController::class,'delete'])->name('deleteVei');
Route::post('/veiculo/{id}/delete', [VeiculoController::class,'remove'])->name('removeVei');

