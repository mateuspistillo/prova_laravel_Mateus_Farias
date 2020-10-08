@extends('layout.site')

@section('titulo', 'Editar Certidao')

@section('conteudo')
    <div class="container" style="margin-top: 30px">
        <h3>Editar Certidão</h3>
        <div class="row">
            <form action="{{ route('admin.certidaos.atualizar', $certidao->id) }}" method="post">
                @csrf
                <input type="hidden" name="_method" value="put">
                @include('admin.certidaos.form')
                <button type="submit" class="btn btn-success">Salvar</button>
            </form>
        </div>
    </div>
@endsection()