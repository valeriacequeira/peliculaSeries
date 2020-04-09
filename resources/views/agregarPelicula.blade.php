@extends('plantilla.principal')
@section('contenido')

@if ($errors)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <div class="d-flex justify-content-center  ">
        <form class="" action="/agregarPelicula" method="post">
            @csrf
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-header">MAXPelicula</div>

            <div class="container-sm text-center bg-info ">
                <input class="form-control" type="text" name="titulo
                 " value="{{old('title')}}" placeholder="titulo"> </div>

            <div class="container-sm text-justify bg-info"><br>
                <input class="form-control" type="text" name="Rating
                 " value="{{old('rating')}}" placeholder="rating"> </div>

            <div class="container-sm text-justify bg-info "> <br>
                <input class="form-control" type="text" name="Premios
                " value="{{old('awards')}}" placeholder="awards"> </div>

            <div class="container-sm text-justify bg-info "><br>
                <input class="form-control" type="text" name="Estreno
                 " value="{{old('release_date')}}" placeholder="Estreno">

                 <div class="container-sm text-justify bg-info"><br>
                    <input class="form-control" type="text" name="genero
                     " value="{{old('')}}" placeholder="Genero"> </div>

                <div class="container-sm text-justify bg-info "> <br>
                    <input class="form-control" type="number" name="Premios
                    " value="{{old('length')}}" placeholder="Duracion:"> </div>

            <button class= "btn btn-primary my-4 btn-block"
            type="submit">Agregar Pelicula</button>
        </form>

   </div>
    @if (session('mensaje'))
    <div class="alert alert-success text-center">
        {{session('mensaje')}}
    </div>
@endif

@endsection
