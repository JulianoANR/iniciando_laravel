<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuariosController;

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

Route::get('/', HomeController::class)->name('home');

Route::get('produtos/inserir', [ProdutosController::class, 'create'])->name('produtos.inserir');
Route::get('produtos/{id}', [ProdutosController::class, 'show'])->name('produtos.descricao');
//Route::get('produtos/{nome}/{valor?}', [ProdutosController::class, 'show'])->name('produtos.descricao');
Route::get('produtos', [ProdutosController::class, 'index'])->name('produtos');
//essas rotas podem ter o msm nome se tiverem metodos diferentes
Route::post('produtos', [ProdutosController::class, 'insert'])->name('produtos.insert');

//edit produtos
Route::get('produtos/{produto}/edit', [ProdutosController::class, 'edit'])->name('produtos.edit');
Route::put('produtos/{produto}', [ProdutosController::class, 'editar'])->name('produtos.editar');

//delete
//Route::get('produtos/{produto}/delete', [ProdutosController::class, 'modal'])->name('produtos.modal');
Route::delete('produtos/{id}/delete', [ProdutosController::class, 'destroy'])->name('produtos.destroy');

//login
Route::post('produtos', [UsuariosController::class, 'login'])->name('usuarios.login');
