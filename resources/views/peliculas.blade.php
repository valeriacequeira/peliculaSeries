@extends('plantilla.principal')
@section('contenido')

<h3 class="text-center text-primary">MAX Peliculas</h3>
<table class="p-3 mb-2 bg-info text-white ">

      <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">

        <img class="/peliculas-mas.jpg" src="/plantilla/peliculas-mas.jpg"
         text="peliculas" class="card-img" width="150px">
          </div>

          <div class="col-md-8">
            <div class="card-body">
                <h4 class="card-title text-primary"> MAX listado: </h4>
        <ul>
    @foreach ($peliculas as $pelicula )
                <li><a href="/pelicula/{{$pelicula->id}}">{{$pelicula->title}}</a> <br>
        <ul>

        <div class="btn-group btn-group-toggle" data-toggle="buttons">
         <label class="btn btn-light  active">
          <input type="checkbox" name="options" id="option1" checked>
                      <a class="text-primary" href="/agregarPelicula"> Agregar </a></label>

                        <label class="btn btn-light">
                          <input type="checkbox" name="options" id="option2">
                <a class=" text-primary" href="/editarPelicula/{{$pelicula->id}}"> Editar </a> </li>
                        </label>
                        <label class="btn btn-light">
                            <input type="checkbox" name="options" id="option3">
                  <a class=" text-primary" href="/borrarPelicula/{{$pelicula->id}}"> Borrar </a> </li>
                          </label>

                      </div>
                     </ul>
                   </li>
                  </u>

                @endforeach
            </div>
          </div>
        </div>
      </div>
    {{$peliculas->links()}}
@endsection
