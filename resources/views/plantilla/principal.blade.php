<!doctype html>
<html lang="en">
 <head>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="/css/app.css">
        <title>MAX Peliculas&Series </title>
  </head>

  <body>
   <nav>
     <ul class="nav justify-content-end">
         <li class="nav-item"> <a class="nav-link active" href="#">inicio</a> </li>
         <li class="nav-item"> <a class="nav-link" href="#">Registrate</a></li>
      </ul>
    </nav>
  <div>
    <ul class="nav nav-pills">
       <li class="nav-item"> <a class="nav-link " href="/inicio">Home</a> </li>
       <li class="nav-item"> <a class="nav-link" href="/actores">Actores</a> </li>
       <li class="nav-item"> <a class="nav-link" href="/peliculas">Peliculas</a> </li>
       {{-- //<li class="nav-item"> <a class="nav-link " href="/series">Series</a> </li> --}}
 </ul>
</div>

   <div class="p-3 mb-2 bg-info text-white ">
   <h2 class="display-3 text-center "> MAX Peliculas & Series </h2>
     <h6 class= "display-4 text-center"> ¡Disfruta con quien quieras!</h6>
   </div>

    <!-- donde van los enlaces de las demas paginas -->


<header>
    <div class="container ">  @yield('principal')  </div>
    {{-- <div class="container ">  @yield('')  </div> --}}
    <div class="container">  @yield('contenido')</div>
</header>

  <!-- pie de pagina -->
    <footer >
        <div class="d-flex justify-content-center text-center text-white">Max Peliculas&Series
            Derechos Reservados 2020 v.c</div>
      </div>
    </footer>

  </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
