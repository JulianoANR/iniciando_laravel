@extends('layouts.template')
@section('title', 'Pagina index')
@section('content')

<h1>Pagina dos Produtos</h1>
@foreach ($produtos as $produto)
<p>{{$produto->nome}}</p>
@endforeach
{{$produtos->links()}}

@endsection