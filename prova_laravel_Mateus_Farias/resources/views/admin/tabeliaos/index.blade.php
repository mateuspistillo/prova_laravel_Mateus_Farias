@extends('layout.site')
@section('titulo', 'Tabeliaes')
@section('conteudo')

<div class="container">
    <div class="row mt-5 mb-2">
        <div class="col-9">
            <h3>Lista de Tabeliães</h3>
        </div>
        <div class="col-3">
            <a class="btn btn-success" href="{{ route('admin.tabeliaos.adicionar') }}">Adicionar</a>
        </div>
    </div>
    <!--mostrando mensagem-->
    <div class="row">
        <div class="col-12">
            @if(!empty($mensagem))
                <div class="alert alert-success">{{ $mensagem }}</div>
            @endif
        </div>
    </div>
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>                   
                </tr>
            </thead>
            <tbody>
                @foreach($tabeliaos as $tabeliao)
                    <tr>
                        <td>{{ $tabeliao->id }}</td>
                        <td>{{ $tabeliao->nome }}</td>
                        <td>
                            <a class="btn btn-primary"
                            href= "{{ route ('admin.tabeliaos.editar', $tabeliao->id) }}">Editar</a>

                            <form action="{{ route('admin.tabeliaos.deletar', $tabeliao->id)}}" method="POST">
                                @csrf  
                                @method('DELETE')
                               <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection