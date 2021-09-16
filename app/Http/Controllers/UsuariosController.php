<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
use App\Models\produto;

class UsuariosController extends Controller
{
    public function login(Request $request){

        $email = $request->email;
        $senha = $request->senha;
        
        $usuarios = usuario::where('email','=',$email)->where('senha','=',$senha)->count();
        //count verifica dados. Ele volta 1 se achar os dados

        if (@$usuarios->id != null){
            $produtos = produto::all();//esta pegando do banco de dados

            @session_start();
            $_SESSION['id_usuario'] = $usuarios->id;
            $_SESSION['nome_usuario'] = $usuarios->nome;
            $_SESSION['nivel_usuario'] = $usuarios->nivel;


            return view('produtos.index', ['produtos'=>$produtos]);
        }else{
            echo "<script language='javascript'> window.alert('Dados Incorretos') </script>";
            return view('home');
        }
    }
}

