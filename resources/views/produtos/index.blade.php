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
                                <a title="Apagar" data-bs-toggle="modal" data-bs-target="#exampleModal" href=""><i class="fas fa-trash text-danger fa-lg ml-4"></i></a>
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Deletar Registro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Deseja realmente excluir esse registro?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <form method="POST" action="{{route('produtos.delete', "$produto->id")}}">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Confirmar</button>
          </form>      
        </div>
      </div>
    </div>
  </div>

@endsection
