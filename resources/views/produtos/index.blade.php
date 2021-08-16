@extends('layouts.template')
@section('title', 'Pagina index')
@section('content')

{{-- @section('extra-styles')
@endsection --}}

<div class="container-fluid p-3">
    <a href="{{route('produtos.inserir')}}" type="button" class="ml-4 mt-4 mb-4 btn btn-secondary">Inserir Produto</a>

    <!-- DataTables Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-sm table-striped table-hover" id="dataTable" width="100%"
                    cellspacing="0">
                    <thead>
                        <tr>
                          <th>Nome</th>
                          <th>Valor</th>
                          <th>Estoque</th>
                          <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                        <tr>
                            <td>{{$produto->nome}}</td>
                            <td>{{$produto->valor}}</td>
                            <td>{{$produto->estoque}}</td>
                            <td>
                                <a title="Detalhes" href="{{route('produtos.descricao', "$produto->id")}}"><i class="fas fa-eye text-primary fa-lg ml-2"></i></a>
                                <a title="Edição" href="{{route('produtos.edit', "$produto->id")}}"><i class="fas fa-edit text-primary fa-lg ml-2"></i></a>
                                <a title="Apagar" href="{{route('produtos.descricao', "$produto->id")}}"><i class="fas fa-trash text-danger fa-lg ml-4"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- {{$produtos->links()}} --}}
</div>

{{-- <script>
    $(document).ready(function () {
        alert("Teste")
    });
</script> --}}

@endsection
