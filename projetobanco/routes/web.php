<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdutoController;
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

Route::get("/login", [AuthController::class, 'showFormLogin'])->name('login'); #mostrar o formulário de login
Route::post("/login", [AuthController::class, 'login']); #processar o formulário de login

#Rota middleware para proteger todas as rotas dentro dela
Route::middleware("auth")->group(function(){
    Route::resource("produtos", ProdutoController::class);
    Route::post("/logout", [AuthController::class, "logout"]); #fazer logout
});
