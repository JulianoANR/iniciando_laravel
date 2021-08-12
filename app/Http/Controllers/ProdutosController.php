<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller{  
    public function index(){
        return "pagina de produtos";
    }

    public function create(){
        return "pagina de inserir produtos";
    }

    public function show($nome, $valor){//função coma parametros opicionais
        if($valor){
            return "o Nome do produto é $nome, e seu valor é $valor";
        }else{
            return "o Nome do produto é $nome";
        }
    }

}
