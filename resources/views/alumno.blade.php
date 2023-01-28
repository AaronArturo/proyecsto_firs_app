@extends('layout')

@section('paginaActual')
    <h3>Pagina de alumnos</h3>
@endsection

@section('conteidoPrincipal')
    <div class="container">
            @foreach ($studens as $alumno)
        <h2>{{$alumno['name']}}</h2>
    @endforeach
    </div>
@endsection

@section('numeroDePagina')
    
@endsection