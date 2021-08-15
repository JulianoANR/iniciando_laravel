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

    public function insert(Request $request){
        //Esse request gera um array com as requisições do forms
        //return view('produtos.insert');
        $produto = new Produto();// fazendo isso ela instancia a tabela
        $produto->nome = $request->nome;//nome vai receber oq vier da requisição
        //Esse nome é o name definido no input do forms
        $produto->valor = $request->valor;
        $produto->estoque = $request->estoque;
        $produto->descricao = $request->descricao;
        //Comando para salvar no banco de dados:
        $produto->save();
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
