<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\HomeController;

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

<<<<<<< HEAD
Route::get('/', HomeController::class);

Route::get('users/{id}/escola/{nome}', function ($id,$nome) {
    return ("usuario e o seu id é $id e seu nome $nome");
});

Route::get('produtos/inserir', function () {
    return "Pagina de inserir produto";
});

//parametro opicional
Route::get('users/{id}/escola/{nome?}', function ($id, $nome = null) { 
    return ("usuario e o seu id é $id e seu nome $nome");
});
=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> parent of d4af642 (env.)
