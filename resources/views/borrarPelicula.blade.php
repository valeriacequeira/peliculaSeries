@extends('principal.plantilla')

@section('contenido')

    <h2 class="text-center text-primary"> MaXBorrar Pelicula {{$pelicula->title}} </h2>

    <form action="/borrarPelicula" method="POST">
        @csrf

        <label class="btn btn-light">
            <input type="checkbox" name="options" id="option3">
          <a class=" text-primary" href="/borrarPelicula/{{$pelicula->id}}"> Borrar </a> </li>
          </label>



   @if (session('mensaje'))
    <div class="alert alert-success text-center">
        {{session('mensaje')}}
    </div>
@endif
@endsection
