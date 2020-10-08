@extends('layout.site')

@section('titulo', 'Adicionar Tabeliao')


@section('conteudo')
    <div class="container" style="margin-top: 30px">
        <h3>Adiconar Tabelião</h3>
        <div class="row">
            <form action="{{ route('admin.tabeliaos.salvar') }}" method="post">
                @csrf
                @include('admin.tabeliaos.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()