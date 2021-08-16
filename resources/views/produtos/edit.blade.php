@extends('layouts.template')
@section('title', 'Pagina edit')

@section('content')
<div class="container p-10 m-50">
    <form method="POST" action="{{route('produtos.editar', $produto)}}">

        {{-- csrf traz o token --}}
        @csrf 

        {{-- Eu nao quero usar o POST preciso do PUT que é um metodo laravel, assim preciso passar aqui --}}
        @method('put')

        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome do Produto</label>
                    <input type="text" class="form-control" id="" name="nome" value="{{$produto->nome}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Estoque</label>
                    <input type="text" class="form-control" id="" name="estoque" value="{{$produto->estoque}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Valor</label>
                    <input type="text" class="form-control" id="" name="valor" value="{{$produto->valor}}">
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descrição:</label>
            <textarea class="form-control" id="" name="descricao" rows="3">{{$produto->nome}}</textarea>
            {{-- No textarea tem q por o value dentro, n tem value pra trazer os valores --}}
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{route('produtos')}}" class="btn btn-warning ">Retornar</a>
    </form>
</div>
@endsection
