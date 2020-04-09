<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Genre;
use  App\serie;

class SeriesController extends Controller
{
     public function lista(){
        $series=serie::All();
        return view('/series', compact('series'));
   }

   public function detalleSerie($id){
    $serie = serie::find($id);
    return view('/detalleSeries', compact('series'));
}

   public function formulario(){
        $generos = Genre::all();
        return view('/agregarSerie', compact('generos'));
   }

   public function agregarSerie(Request $datos){
    $validaciones = [
        'title'=> 'required|min:2',
        'relase_date'=> 'required|date',
        'end_date'=> 'required|date',
        'genre'=> 'required|numeric',
    ];

    $this->validate($datos, $validaciones);

    $serieNueva = new Serie;
    $serieNueva->title=$datos['title'];
    $serieNueva->release_date=$datos['release_date'];
    $serieNueva->end_date=$datos['end_date'];
    $serieNueva->genre_id=$datos['genre'];
    $serieNueva->save();
    return back()->with('mensaje','Serie Agregada, :)!!');
}
    public function destroy($id){
    $registro = serie::find($id);
    $registro->delete();

    return redirect('/series'); back()->with(' mensaje ,serie eliminada, listo');
}
}
