@extends('layouts')
@section('conteudo')
    <h2>carinho</h2>

    @if(isset($cart) && count($cart) > 0)

    <table class="table">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nome</th>
                <th>Descriçao</th>
                <th>Valor</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($cart as $indice => $p)
                <tr>
                    <td><img src="{{ $p->foto}}" height="100"></td>
                    <td>{{ $p->nome}}</td>
                    <td>{{ $p->descricao}}</td>
                    <td>{{ $p->valor}}</td>
                    <td><a href="{{ route('excluir_carrinho', ['indice' => $indice]) }}" class="btn btn-danger">
                        <i class="bi bi-trash-fill"></i>
                        </a>
                    </td>
                        
                </tr>
            @endforeach
        </tbody>
    </table>
        
    @else

    <p>Carrinho está vazio</p>
        
    @endif
@endsection