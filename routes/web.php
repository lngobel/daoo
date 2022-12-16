<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EntregadorController;
use App\Http\Controllers\VeiculoController;
use App\Models\Cliente;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard',
                ['clientes'=>Cliente::all(),
                'users'=>User::all()]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/cliente/{id}', function ($id) {
    return view('pages.cliente.single-dash',['cliente'=>Cliente::find($id) ]);
})->middleware(['auth', 'verified'])->name('cliente.single-dash');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::controller(ClienteController::class)
    ->group(function () {

        Route::prefix('/clientes')->group(function () {
            Route::get('/', 'index')->name('clientes');
            Route::get('/{id}', 'show');
        });

        Route::prefix('/cliente')
            ->middleware('auth')
            ->group(function () {
                Route::get('/', 'create');
                Route::post('/', 'store');

                Route::get('/{id}/edit', 'edit')->name('editCli');
                Route::post('/{id}/update', 'update')->name('updateCli');

                Route::get('/{id}/delete', 'delete')->name('deleteCli');
                Route::post('/{id}/remove', 'remove')->name('removeCli');
            });
    });

    Route::controller(EntregadorController::class)
    ->group(function () {

        Route::prefix('/entregadores')->group(function () {
            Route::get('/', 'index')->name('entregadores');
            Route::get('/{id}', 'show');
        });

        Route::prefix('/entregador')
            ->middleware('auth')
            ->group(function () {
                Route::get('/', 'create');
                Route::post('/', 'store');

                Route::get('/{id}/edit', 'edit')->name('editEnt');
                Route::post('/{id}/update', 'update')->name('updateEnt');

                Route::get('/{id}/delete', 'delete')->name('deleteEnt');
                Route::post('/{id}/remove', 'remove')->name('removeEnt');
            });
    });

    Route::controller(VeiculoController::class)
    ->group(function () {

        Route::prefix('/veiculos')->group(function () {
            Route::get('/', 'index')->name('veiculos');
            Route::get('/{id}', 'show');
        });

        Route::prefix('/veiculo')
            ->middleware('auth')
            ->group(function () {
                Route::get('/', 'create');
                Route::post('/', 'store');

                Route::get('/{id}/edit', 'edit')->name('editVei');
                Route::post('/{id}/update', 'update')->name('updateVei');

                Route::get('/{id}/delete', 'delete')->name('deleteVei');
                Route::post('/{id}/remove', 'remove')->name('removeVei');
            });
    });