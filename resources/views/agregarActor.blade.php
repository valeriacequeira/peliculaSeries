@extends('plantilla.principal')
@section('contenido')

@if ($errors)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach

        </ul>
        @section('contenido')
    @endif

         <div class="d-flex justify-content-center   ">
          <form class="" action="/agregarActor" method="post">
        @csrf

        <div></div>
        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
           <div class="card-header">MAX Actor</div>
       <div class="container-sm text-center bg-info ">
          <input class="form-control" type="text" name=" first_name"
          value="{{old('fisrt_name')}}" placeholder="Nombre"> Nombre </div>

      <div class="container-sm text-center bg-info "><br>
            <input class="form-control" type="text" name="last_name"
          value="{{old('last_name')}}" placeholder="Apellido"> </div>

       <div class="container-sm text-center bg-info "><br>
         <input class="form-control" type="text" name="rating"
            value="{{old('rating')}}" placeholder="Rating"> </div><br>

          <button class= "btn btn-primary my-4 btn-block"
                  type="submit"> Agregar Actor</button>
    </form>

  </div>
    @if (session('mensaje'))
    <div class="alert alert-success text-center">
        {{session('mensaje')}}
    </div>
  @endif
 @endsection
