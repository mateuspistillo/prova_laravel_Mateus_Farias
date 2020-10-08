@extends('layout.site')

@section('titulo', 'Adicionar Certidão')


@section('conteudo')
    <div class="container" style="margin-top: 30px">
        <h3>Adiconar Certidão</h3>
        <div class="row">
            <form action="{{ route('admin.certidaos.salvar') }}" method="post">
                @csrf
                @include('admin.certidaos.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()