@extends('templates.template')

@section('content')
    <h1 class="text-center">@if(isset($carros)) Editar carros @else  Cadastrar novo carros @endif</h1> <hr>

    <div class="col-8 m-auto">

        @if(isset($errors) && count($errors)>0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}<br>
                @endforeach
            </div>
        @endif

        @if(isset($carros))
            <form name="formEdit" id="formEdit" method="post" action="{{url("carros/$carros->id")}}">
                @method('PUT')
        @else
            <form name="formCad" id="formCad" method="post" action="{{url('carros')}}">
        @endif
                @csrf
                <input class="form-control" type="text" name="modelo" id="modelo" placeholder="Modelo:" value="{{$carros->modelo ?? ''}}" required><br>
                <select class="form-control" name="id_user" id="id_user" required>
                    <option value="{{$carros->relUsers->id ?? ''}}">{{$carros->relUsers->name ?? 'Usuario'}}</option>
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select><br>
                <input class="form-control" type="text" name="ano_lancamento" id="ano_lancamento" placeholder="Ano:" value="{{$carros->ano_lancamento ?? ''}}" required><br>
                <input class="form-control" type="text" name="valor" id="tempo" placeholder="valor:" value="{{$carros->valor ?? ''}}" required><br>
                <input class="btn btn-danger" type="submit" value="@if(isset($carros)) Editar carros @else Cadastrar novo carros @endif">
            </form>
    </div>
    <a href="{{url('carros')}}">
        <h1 class="text-center"> <button class="btn btn-secondary">
            Retornar para pagina inicial</button></h1>
        </a>
@endsection
