@extends('layout.site')
@section('titulo', 'Certidoes')
@section('conteudo')

<div class="container">
    <div class="row mt-5 mb-2">
        <div class="col-9">
            <h3>Lista de Certidões</h3>
        </div>
        <div class="col-3"> 
            <a class="btn btn-success" href="{{ route('admin.certidaos.adicionar') }}">Adicionar</a>
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
                    <th scope="col">Tipo da Certidão</th> 
                    <th scope="col">Nome do envolvido</th>  
                    <th scope="col">Nome do envolvido</th>                   
                    <th scope="col">Data da Certidão</th> 
                </tr>
            </thead>
            <tbody>
                @foreach($certidaos as $certidao)
                    <tr>
                        <td>{{ $certidao->id }}</td>
                        <td>{{ $certidao->tipoCertidao }}</td>
                        <td>{{ $certidao->nmEnvolvido1 }}</td>
                        <td>{{ $certidao->nmEnvolvido2 }}</td>
                        <td>{{ $certidao->dtCertidao }}</td>
                        <td>
                            <a class="btn btn-primary"
                            href= "{{ route ('admin.certidaos.editar', $certidao->id) }}">Editar</a>

                            <form action="{{ route('admin.certidaos.deletar', $certidao->id)}}" method="POST">
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