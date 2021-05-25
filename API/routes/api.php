<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\ProductoController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Persona
Route::get('Persona/{id}', [PersonaController::class, 'ObtenerPersona'] );
Route::post('Persona', [PersonaController::class, 'CrearPersona'] );
Route::put('Persona/{id}', [PersonaController::class, 'ModificarPersona'] );
Route::delete('Persona/{id}', [PersonaController::class, 'EliminarPersona'] );
//Producto
Route::get('Producto/{id}', [ProductoController::class, 'ObtenerProducto'] );
Route::post('Producto', [ProductoController::class, 'CrearProducto'] );
Route::put('Producto/{id}', [ProductoController::class, 'ModificarProducto'] );
Route::delete('Producto/{id}', [ProductoController::class, 'EliminarProducto'] );