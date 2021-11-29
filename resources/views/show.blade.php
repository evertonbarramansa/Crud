@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualizar</h1> <hr>

    <div class="col-8 m-auto">
        @php
           $user=$carros->find($carros->id)->relUsers;
        @endphp
        modelo: {{$carros->modelo}}<br>
        Cadastrado por: {{$user->name}}<br>
        Ano de lançamento: {{$carros->ano_lancamento}}<br>
        Valor do carro: {{$carros->valor}} <br>
        Email do usuario: {{$user->email}} <br>
    </div>
    <a href="{{url('carros')}}">
    <h1 class="text-center"> <button class="btn btn-success">
        Retornar para pagina inicial</button></h1>
    </a>
@endsection
