<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function login($email, $senha){
        $usuario = Usuario::find($id);
        return view('produtos.show', ['produto' => $produto]);
    }
}
