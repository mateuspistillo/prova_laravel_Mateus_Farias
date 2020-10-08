@extends('layout.site')

@section('titulo', 'Adicionar Contrato')


@section('conteudo')
    <div class="container" style="margin-top: 30px">
        <h3>Adiconar Contrato</h3>
        <div class="row">
            <form action="{{ route('admin.contratos.salvar') }}" method="post">
                @csrf
                @include('admin.contratos.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()