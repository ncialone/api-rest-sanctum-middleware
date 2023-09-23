<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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


Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);


//Sanctum actúa como middleware de seguridad de logueo de sesion
//a estas rutas se acceden unicamente si el usuario esta autenticado y tiene token de acceso
Route::middleware(['auth:sanctum'])->group(function(){
    
    Route::get('logout', [AuthController::class, 'logout']);
    
    Route::get('products', [ProductController::class, 'index']);
});
