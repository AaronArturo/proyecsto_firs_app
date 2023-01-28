@extends('layout')

@section('paginaActual')
    <h3>Pagina de maestros</h3>
@endsection

@section('conteidoPrincipal')
    <div class="container">
            @foreach ($masters as $master)
        <h2>{{$master['name']}}</h2>
    @endforeach
    </div>
@endsection

@section('numeroDePagina')
    
@endsection