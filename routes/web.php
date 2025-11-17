<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ClienteController;

// Página principal
Route::get('/', [HomeController::class, 'index'])->name('home');

// ---------------------------------------------------------
// RUTAS PARA PRODUCTOS
// ---------------------------------------------------------
Route::prefix('productos')->group(function () {

    Route::get('/', [ProductoController::class, 'index'])->name('producto.index');

    Route::get('/crear', [ProductoController::class, 'create'])->name('producto.create');
    Route::post('/guardar', [ProductoController::class, 'store'])->name('producto.store');

    Route::get('/detalle/{id}', [ProductoController::class, 'show'])->name('producto.show');

    Route::get('/editar/{id}', [ProductoController::class, 'edit'])->name('producto.edit');
    Route::put('/actualizar/{id}', [ProductoController::class, 'update'])->name('producto.update');

    Route::delete('/eliminar/{id}', [ProductoController::class, 'destroy'])->name('producto.destroy');
});

// ---------------------------------------------------------
// RUTAS PARA ESTUDIANTES
// ---------------------------------------------------------
Route::prefix('estudiantes')->group(function () {

    Route::get('/', [EstudianteController::class, 'index'])->name('estudiante.index');

    Route::get('/crear', [EstudianteController::class, 'create'])->name('estudiante.create');
    Route::post('/guardar', [EstudianteController::class, 'store'])->name('estudiante.store');

    Route::get('/detalle/{id}', [EstudianteController::class, 'show'])->name('estudiante.show');

    Route::get('/editar/{id}', [EstudianteController::class, 'edit'])->name('estudiante.edit');
    Route::put('/actualizar/{id}', [EstudianteController::class, 'update'])->name('estudiante.update');

    Route::delete('/eliminar/{id}', [EstudianteController::class, 'destroy'])->name('estudiante.destroy');
});

// ---------------------------------------------------------
// RUTAS PARA EMPLEADOS
// ---------------------------------------------------------
Route::prefix('empleados')->group(function () {

    Route::get('/', [EmpleadoController::class, 'index'])->name('empleado.index');

    Route::get('/crear', [EmpleadoController::class, 'create'])->name('empleado.create');
    Route::post('/guardar', [EmpleadoController::class, 'store'])->name('empleado.store');

    Route::get('/detalle/{id}', [EmpleadoController::class, 'show'])->name('empleado.show');

    Route::get('/editar/{id}', [EmpleadoController::class, 'edit'])->name('empleado.edit');
    Route::put('/actualizar/{id}', [EmpleadoController::class, 'update'])->name('empleado.update');

    Route::delete('/eliminar/{id}', [EmpleadoController::class, 'destroy'])->name('empleado.destroy');
});

// ---------------------------------------------------------
// RUTAS PARA CLIENTES
// ---------------------------------------------------------
Route::prefix('clientes')->group(function () {

    Route::get('/', [ClienteController::class, 'index'])->name('cliente.index');

    Route::get('/crear', [ClienteController::class, 'create'])->name('cliente.create');
    Route::post('/guardar', [ClienteController::class, 'store'])->name('cliente.store');

    Route::get('/detalle/{id}', [ClienteController::class, 'show'])->name('cliente.show');

    Route::get('/editar/{id}', [ClienteController::class, 'edit'])->name('cliente.edit');
    Route::put('/actualizar/{id}', [ClienteController::class, 'update'])->name('cliente.update');

    Route::delete('/eliminar/{id}', [ClienteController::class, 'destroy'])->name('cliente.destroy');
});
