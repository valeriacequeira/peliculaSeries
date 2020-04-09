@extends('plantilla.principal')
@section('contenido')

    <h2 class="display-4 text-center text-primary ">MAX Detalle</h2>

    <div>
        <ul>
            <li>Rating:{{$pelicula->rating}}</li>
            <li>Premios:{{$pelicula->awards}}</li>
            <li>Estreno:{{$pelicula->release_date}}</li>
            <li>Duracion:{{$pelicula->length}}</li>
            @if ($pelicula->genre)
            <li>Genero: {{$pelicula->genre->name}}</li>
            @else
            <li>Genero: No tiene</li>
          @endif
          </ul>
     </div>

     <div class="text-primary col py-3 px-lg-5 border bg-light">
        <div class="container ">
          <h2 class="">{{$pelicula->actores}}</h2>
          <div class="">
               <li class=""> <h3><strong> Actores</strong></h3>
                @foreach ($pelicula->actors as $actor)
               <p>{{$actor->first_name . " " .$actor->last_name}}</p>
                 @endforeach
    </div>
  </div>
</div>

@endsection
