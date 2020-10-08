@extends('layout.site')

@section('titulo', 'Editar Contrato')

@section('conteudo')
    <div class="container" style="margin-top: 30px">
        <h3>Editar Contrato</h3>
        <div class="row">
            <form action="{{ route('admin.contratos.atualizar', $contrato->id) }}" method="post">
                @csrf
                <input type="hidden" name="_method" value="put">
                @include('admin.contratos.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()