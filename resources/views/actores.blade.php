@extends('plantilla.principal')
@section('contenido')

<div class="row ">
    <div class="col-sm-6 ">
        <h5 class="card-title text-primary text-center"> MAX Actores </h5>

      <div class="card">
        <div class="card-body">

            <p class="card-text text-primary "> Listado MAX_Actores:</p>
      @foreach ($actors as $actor)
        <h5 scope="row">   {{$actor->id}}
         <a href="/actores/{{$actor->id}}">- {{$actor->first_name . " " .$actor->last_name}}</a></h5>
         <form action="post">
            <a href="/agregarActor" class="btn btn-light">Agregar</a>
               <form action="" method="post">
             <a class= "btn btn-light " href="/editarActor">Editar</a>
                 @method('DELETE')
                <form action="" method="post">
              <a class= "btn btn-light " href="/eliminarActor">Eliminar</a>
              @csrf
        @endforeach
      </form>
     </div>
   </div>
 <br>
 {{$actors->links()}}

</div>
@endsection
