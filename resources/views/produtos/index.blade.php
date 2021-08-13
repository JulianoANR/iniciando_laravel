@extends('layouts.template')
@section('title', 'Pagina index')
@section('content')

<div class="containt"></div>
<a href="produtos/inserir" type="button" class="mt-4 mb-4 btn btn-secondary">Inserir</a>
@foreach ($produtos as $produto)
<p>{{$produto->nome}}</p>
@endforeach
{{$produtos->links()}}
</div>

@endsection