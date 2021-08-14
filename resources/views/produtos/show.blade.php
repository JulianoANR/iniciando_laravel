@extends('layouts.template')
@section('title', 'Pagina create')
@section('content')
@section('extra-style')
<style>
    span {
        margin-bottom: 20px;
    }
</style>    
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
            <span class="placeholder col-2 bg-info style=width: 35%">Em até 12x no cartão</span><br><br>
            <a href="#" class="btn btn-primary ">Adicionar ao carrinho</a>
        </p>
    </div>
</div>

@endsection


