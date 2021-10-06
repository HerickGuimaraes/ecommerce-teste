@extends('layouts')
@section('conteudo')
    <h2>Cadastrar Cliente</h2><br><br>

    <form action="{{route('cadastrar_cliente')}}" method="post" class="form-row">
        @csrf
        <div class="row">
        <div class="from-group col-md-8 mb-4">
            <input type="text" name="nome" class="form-control" placeholder="Nome">
        </div>
        <div class="from-group col-md-4 mb-4">
            <input type="text" name="cpf" class="form-control" placeholder="CPF">
        </div>
        <div class="from-group col-md-6 mb-4">
            <input type="email" name="email" class="form-control" placeholder="E-mail">
        </div>
        
        <div class="from-group col-md-6 mb-4">
            <input type="password" name="password" class="form-control" placeholder="Senha">
        </div>
        <div class="from-group col-md-6  mb-4">
            <input type="text" name="endereco" class="form-control" placeholder="Endereço">
        </div>
        <div class="from-group col-md-2  mb-4">
            <input type="text" name="numero" class="form-control" placeholder="Numero">
        </div>
        <div class="from-group col-md-4 mb-4">
            <input type="text" name="complemento" class="form-control" placeholder="Complemento">
        </div>
        
        <div class="form-group col-md-6  mb-4">
            <input type="text" name="cidade" class="form-control" placeholder="Cidade">
        </div>
        <div class="form-group col-md-3  mb-4">
            <input type="text" name="estado" class="form-control" placeholder="Estado">
        </div>
        <div class="form-group col-md-3  mb-4">
            <input type="CEP" name="cep" class="form-control" placeholder="CEP">
        </div>
        </div>
        
        <input type="submit" class="btn btn-success btm-sm px-4" value="Cadastrar">
        
    </form>
@endsection
