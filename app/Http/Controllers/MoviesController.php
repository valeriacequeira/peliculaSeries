<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
  public function lista(){
//$peliculas = Movie::all();
$peliculas=Movie::orderBy('id','ASC')->paginate(3);
return view('/peliculas',compact('peliculas'));
}

 public function detalle($id){
 $pelicula = Movie::find($id);
 return view('/detalle', compact('pelicula'));
}

 public function top(){
 $peliculas =movie::where("rating",">",3)
 ->orderBy('title')
 ->get();
 $vac = compact('peliculas');
 return view('/peliculas', $vac);
}

 public function mostrarFormulario(){
  return view('/agregarPelicula');
}

 public function agregarPelicula(Request $datos){
 $validaciones = [
 'title'=> 'required|min:2',
 'rating'=> 'required|numeric|max:10',
 'awards'=> 'required|numeric',
 'release_date'=> 'required|date',
 'length'=> 'required|numeric',
];

$this->validate($datos, $validaciones);

 $peliculaNueva = new Movie;
 $peliculaNueva->title=$datos['title'];
 $peliculaNueva->rating=$datos['rating'];
 $peliculaNueva->title=$datos['awards'];
 $peliculaNueva->release_date=$datos['release_date'];
 $peliculaNueva->save();
return back()->with('/mensaje','Pelicula agregada :), listo!!');
}

  public function edita($id){
  $pelicula =Movie::find($id);
  return view('/editaPelicula', compact('pelicula'));
}
 public function editar($id){
$pelicula =Movie::findOrFail($id);
return view('/editarPelicula', compact('pelicula'));
}
 public function actualiza(Request $datos){
 $validaciones=[
  'title'=> 'required|min:2',
  'rating'=> 'required|numeric|max:10',
  'awards'=> 'required|numeric',
  'release_date'=> 'required|date',

];

 $this->validate($datos, $validaciones);
  $editaPelicula = Movie::find($datos["id"]);

  $editaPelicula->title=$datos['title'];
     $editaPelicula->rating=$datos['rating'];
     $editaPelicula->awards=$datos['awards'];
     $editaPelicula->release_date=$datos['release_date'];
     $editaPelicula->length=$datos['lenght'];
     $editaPelicula->save();
   return back()->with('mj ,cambios hechos :), Hecho');
}
  public function actualizar(Request $id){
  $validator =[
      'title' => 'required|min:2',
      'rating' => 'required|numeric|max:10',
      'awards' => 'required|numeric',
      'release_date' => 'required|date',
      'length'=> 'required|numeric',
      ];

      $this->loginValidation($id );
      $validator=Movie::find($id)->actualizar($id->all());
      return redirect()->route('/peliculas');
  }
     public function destroy($id){

        $registro = Movie::find($id);
      $registro->delete();
      return redirect('/peliculas'); back()->with(' mensaje ,pelicula eliminada, :/');
  }
}
