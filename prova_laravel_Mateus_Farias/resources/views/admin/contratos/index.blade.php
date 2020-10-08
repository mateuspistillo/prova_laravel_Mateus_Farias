@extends('layout.site')
@section('titulo', 'Contratos')
@section('conteudo')

<div class="container">
    <div class="row mt-5 mb-2">
        <div class="col-9">
            <h3>Lista de Contratos</h3>
        </div>
        <div class="col-3"> 
            <a class="btn btn-success" href="{{ route('admin.contratos.adicionar') }}">Adicionar</a>
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
                    <th scope="col">Tipo do Contrato</th> 
                    <th scope="col">Nome do envolvido</th>  
                    <th scope="col">Nome do envolvido</th>                   
                    <th scope="col">Data do Contrato</th>
                    <th scope="col">Valor do Contrato</th>  
                </tr>
            </thead>
            <tbody>
                @foreach($contratos as $contrato)
                    <tr>
                        <td>{{ $contrato->id }}</td>
                        <td>{{ $contrato->tipoContrato }}</td>
                        <td>{{ $contrato->nmEnvolvido1 }}</td>
                        <td>{{ $contrato->nmEnvolvido2 }}</td>
                        <td>{{ $contrato->dtContrato }}</td>
                        <td>{{ $contrato->vlContrato }}</td>
                        <td>
                            <a class="btn btn-primary"
                            href= "{{ route ('admin.contratos.editar', $contrato->id) }}">Editar</a>

                            <form action="{{ route('admin.contratos.deletar', $contrato->id)}}" method="POST">
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