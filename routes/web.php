<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CreditoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ReporteController;

// Ruta para la página de inicio
Route::get('/home', function () {
    return view('home');
});

// Rutas para Usuarios
Route::prefix('usuarios')->group(function () {
    Route::get('/show', [UsuarioController::class, 'index'])->name('usuarios.index'); // Lista de usuarios
    Route::get('/create', [UsuarioController::class, 'create'])->name('usuarios.create'); // Crear nuevo usuario
    Route::post('/', [UsuarioController::class, 'store'])->name('usuarios.store'); // Guardar usuario
    Route::get('/edit/{id}', [UsuarioController::class, 'edit'])->name('usuarios.edit'); // Editar usuario
    Route::put('/{id}', [UsuarioController::class, 'update'])->name('usuarios.update'); // Actualizar usuario
    Route::delete('/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy'); // Eliminar usuario
});


// Rutas para Clientes
Route::prefix('clientes')->group(function () {
    Route::get('/show', [ClienteController::class, 'index'])->name('clientes.index'); // Lista de clientes
    Route::get('/create', [ClienteController::class, 'create'])->name('clientes.create'); // Crear nuevo cliente
    Route::post('/', [ClienteController::class, 'store'])->name('clientes.store'); // Guardar cliente
    Route::get('/edit/{id}', [ClienteController::class, 'edit'])->name('clientes.edit'); // Editar cliente
    Route::put('/{id}', [ClienteController::class, 'update'])->name('clientes.update'); // Actualizar cliente
    Route::delete('/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy'); // Eliminar cliente
});

// Rutas para Usuarios
Route::prefix('usuarios')->group(function () {
    Route::get('/show', [UsuarioController::class, 'index'])->name('usuarios.index'); // Lista de usuarios
    Route::get('/create', [UsuarioController::class, 'create'])->name('usuarios.create'); // Crear nuevo usuario
    Route::post('/', [UsuarioController::class, 'store'])->name('usuarios.store'); // Guardar usuario
    Route::get('/edit/{id}', [UsuarioController::class, 'edit'])->name('usuarios.edit'); // Editar usuario
    Route::put('/{id}', [UsuarioController::class, 'update'])->name('usuarios.update'); // Actualizar usuario
    Route::delete('/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy'); // Eliminar usuario
});

// Rutas para Créditos
Route::prefix('creditos')->group(function () {
    Route::get('/show', [CreditoController::class, 'index'])->name('creditos.index'); // Lista de créditos
    Route::get('/create', [CreditoController::class, 'create'])->name('creditos.create'); // Crear nuevo crédito
    Route::post('/', [CreditoController::class, 'store'])->name('creditos.store'); // Guardar crédito
    Route::get('/edit/{id}', [CreditoController::class, 'edit'])->name('creditos.edit'); // Editar crédito
    Route::put('/{id}', [CreditoController::class, 'update'])->name('creditos.update'); // Actualizar crédito
    Route::delete('/{id}', [CreditoController::class, 'destroy'])->name('creditos.destroy'); // Eliminar crédito
});

// Rutas para Pagos
Route::prefix('pagos')->group(function () {
    Route::get('/show', [PagoController::class, 'index'])->name('pagos.index'); // Lista de pagos
    Route::get('/create', [PagoController::class, 'create'])->name('pagos.create'); // Crear nuevo pago
    Route::post('/', [PagoController::class, 'store'])->name('pagos.store'); // Guardar pago
    Route::get('/edit/{id}', [PagoController::class, 'edit'])->name('pagos.edit'); // Editar pago
    Route::put('/{id}', [PagoController::class, 'update'])->name('pagos.update'); // Actualizar pago
    Route::delete('/{id}', [PagoController::class, 'destroy'])->name('pagos.destroy'); // Eliminar pago
});

// Rutas para Reportes
Route::prefix('reportes')->group(function () {
    Route::get('/show', [ReporteController::class, 'index'])->name('reportes.index'); // Lista de reportes
    Route::get('/create', [ReporteController::class, 'create'])->name('reportes.create'); // Crear nuevo reporte
    Route::post('/', [ReporteController::class, 'store'])->name('reportes.store'); // Guardar reporte
    Route::get('/edit/{id}', [ReporteController::class, 'edit'])->name('reportes.edit'); // Editar reporte
    Route::put('/{id}', [ReporteController::class, 'update'])->name('reportes.update'); // Actualizar reporte
    Route::delete('/{id}', [ReporteController::class, 'destroy'])->name('reportes.destroy'); // Eliminar reporte
});
Route::get('/home', function () { return view('home');
})->middleware('auth');


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
