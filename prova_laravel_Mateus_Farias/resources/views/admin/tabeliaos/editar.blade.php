@extends('layout.site')

@section('titulo', 'Editar Tabeliao')

@section('conteudo')
    <div class="container" style="margin-top: 30px">
        <h3>Editar Tabelião</h3>
        <div class="row">
            <form action="{{ route('admin.tabeliaos.atualizar', $tabeliao->id) }}" method="post">
                @csrf
                <input type="hidden" name="_method" value="put">
                @include('admin.tabeliaos.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()