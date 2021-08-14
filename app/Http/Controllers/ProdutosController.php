<?php

namespace App\Http\Controllers;

use App\Models\produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller{  
    public function index(){
        $produtos = produto::paginate();//esta pegando do banco de dados
        return view('produtos.index', ['produtos'=>$produtos]);
    }

    public function create(){
        return view('produtos.create');
    }

    public function show($id){
        $produto = Produto::find($id);//tabela Produto
        //Ele ja filtra e traz o id.
        return view('produtos.show', ['produto' => $produto]);
    }

    /*
    public function show($nome, $valor = null){//função com parametros opicionais
        return view('produtos.show', ['nome' => $nome,'valor' => $valor]);
        
        if($valor){
            return "o Nome do produto é $nome, e seu valor é $valor";
        }else{
            return "o Nome do produto é $nome";
        }       
    }
    */
}
