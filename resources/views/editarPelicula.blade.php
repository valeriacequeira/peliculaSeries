@extends('plantilla.principal')
@section('contenido')

    @if ($errors)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

         <div class="d-flex justify-content-center">
          <form class="" action="/editarActor" method="post">
        @csrf
        <div></div>
        <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
           <div class="card-header">MAX Actor</div>

       <div class="container-sm text-center bg-info ">
          <input class="form-control" type="text" name="first_name"
          value="{{old('fisrt_name')}}" placeholder="Nombre"> </div>
      <div class="container-sm text-center bg-info "><br>

            <input class="form-control" type="text" name="last_name"
          value="{{old('last_name')}}" placeholder="Apellido"> </div>
       <div class="container-sm text-center bg-info "><br>

         <input class="form-control" type="text" name="rating"
            value="{{old('rating')}}" placeholder="Rating"> </div><br>
          <button class= "btn btn-primary my-4 btn-block"
                  type="submit"> editar Actor</button>
    </form>

  </div>
    @if (session('mensaje'))
    <div class="alert alert-success text-center">
        {{session('mensaje')}}
    </div>
  @endif

 @endsection



    {{-- <h2 class="text-primary text-center">  una Pelicula </h2>

    <div class="d-flex justify-content-center ">
            <form class="" action="/editaPelicula" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                @if ($errors)
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
                @endif
                <input type="hidden" name="id" value="{{$peliculaEditada->id}}">

                <div class="container-sm text-justify bg-info ">
                    <label class="m-md-3"for="">Titulo:</label>
                        <input type="text" name="title" value="{{$peliculaEditada->title}}">
                </div>
                <div class="container-sm text-justify bg-info">
                    <label class="m-md-3"for="">Rating:</label>
                        <input type="text" name="rating" value="{{$peliculaEditada->rating}}">
                </div>
                <div class="container-sm text-justify bg-info ">
                    <label class="m-md-3" for="">Premios:</label>
                        <input type="number" name="awards" value="{{$peliculaEditada->awards}}">
                </div>
                <div class="container-sm text-justify bg-info ">
                    <label class="m-md-3" for="">Estreno:</label>
                        <input type="date" name="release_date" value="{{$peliculaEditada->release_date}}">
                </div>
                <div class="container-sm text-justify bg-info">
                    <label class="m-md-3" for="">Duracion:</label>
                        <input type="number" name="length" value="{{$peliculaEditada->length}}">
                </div>
                <button class= "btn btn-primary my-4 btn-block" type="submit">Editar Pelicula</button>
            </form>
        </div>

    {{-- SIRVE PARA AGREGAR UN MENSAJE CUANDO SE AGREGA un mensaje --}}
        @if (session('mensaje'))
            <div class="alert alert-success text-center">
                {{session('mensaje')}}
            </div> --}}
        @endif
@endsection
