<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaginaTemporalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/maquinaria/list', function () {
        return view('pagina-temporal');
    })->name('maquinaria.list');

    Route::get('/maquinaria/create', function () {
        return view('pagina-temporal');
    })->name('maquinaria.create');

    Route::get('/maquinaria/update', function () {
        return view('pagina-temporal');
    })->name('maquinaria.update');

    Route::get('/maquinaria/delete', function () {
        return view('pagina-temporal');
    })->name('maquinaria.delete');

    Route::get('/parcelas/list', function () {
        return view('pagina-temporal');
    })->name('parcelas.list');

    Route::get('/parcelas/create', function () {
        return view('pagina-temporal');
    })->name('parcelas.create');

    Route::get('/parcelas/update', function () {
        return view('pagina-temporal');
    })->name('parcelas.update');

    Route::get('/parcelas/delete', function () {
        return view('pagina-temporal');
    })->name('parcelas.delete');

    Route::get('/acciones/list', function () {
        return view('pagina-temporal');
    })->name('acciones.list');

    Route::get('/acciones/create', function () {
        return view('pagina-temporal');
    })->name('acciones.create');

    Route::get('/acciones/update', function () {
        return view('pagina-temporal');
    })->name('acciones.update');

    Route::get('/acciones/delete', function () {
        return view('pagina-temporal');
    })->name('acciones.delete');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/maquinaria', [PaginaTemporalController::class, 'index'])->name('maquinaria');
    Route::get('/terrenos', [PaginaTemporalController::class, 'index'])->name('terrenos');
    Route::get('/acciones', [PaginaTemporalController::class, 'index'])->name('acciones');
});

require __DIR__.'/auth.php';