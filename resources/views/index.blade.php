@extends('templates.template')

@section('content')
        <H1 class="text-center">Carros</H1>
        <hr>

      <div class="text-center mt-3 mb-4">
        <a href="{{url('carros/create')}}">
            <button class="btn btn-sucess">Cadastrar</button>
        </a>
</div>

        <div class="col-8 m-auto">
            @csrf    
        <table class="table text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Modelo</th>
      <th scope="col">Ano</th>
      <th scope="col">Valor</th>
      <th scope="col">Ação </th>
    </tr>
  </thead>
  <tbody>
      
  @foreach($carros as $carros)
         
    @php
        $user=$carros->find($carros->id)->relUsers;
    @endphp
    <tr>
        <th scope="row">{{$carros->id}}</th>
        <td>{{$carros->modelo}}</td>
        <td>{{$carros->ano_lancamento}}</td>
        <td>{{$carros->valor}}</td>
     
        <td>
            <a href="{{url("carros/$carros->id")}}">
                <button class="btn btn-dark">Visualizar</button>
            </a>

            <a href="{{url("carros/$carros->id/edit")}}">
                <button class="btn btn-primary">Editar</button>
            </a>

            <a href="{{url("carros/$carros->id")}}"class='js-del'>
                <button class="btn btn-danger">Deletar</button>
            </a>
        </td>
    </tr>
    @endforeach



    
    
  </tbody>
</table>


        
       
@endsection