@extends('layouts.template')
@section('title', 'Pagina create')
@section('content')

@section('extra-style')

@php
    $valor_prod = number_format($produto->valor, 2, ',', '.');
@endphp

@endsection
<div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $produto->nome ?></h5>
      <p class="card-text"><?php echo $produto->descricao ?></p>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <p class="card-text placeholder-glow">
            <span class="placeholder col-1 bg-info style=width: 35%">Frete Gratis</span>
            <span class="placeholder col-2 bg-info style=width: 35%">Em até 12x no cartão</span>
        </p>
    </div>
    <div class="card-body">
        <span class="placeholder col-2 bg-danger style=width: 50% color: #fff;"><?php echo 'Valor R$'.$valor_prod.' Un.'?></span>
            <br><br>
            <a href="{{route('produtos')}}" class="btn btn-primary ">Ver Produtos</a>
        </p>
    </div>
</div>

@endsection


