<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\actor;

class ActorsController extends Controller
{

    public function lista(){
        $actors=Actor::orderBy('id')->paginate(5);
        return view('actores',compact('actors'));
    }

    public function detalle($id){
        $actor=Actor::find($id);
        return view('/detalleActor', compact('actor'));
    }
    public function mostrar(){
        return view('/agregarActor');
    }

    public function agregarActor(Request $datos){
        $validaciones =[
          "first_name" => 'required',
          "last_name" => 'required',
          "rating" => 'required|numeric',
        ];
        $this->validate($datos, $validaciones);
        $actorNuevo=new Actor;
        $actorNuevo->first_name=$datos["first_name"];
        $actorNuevo->last_name=$datos["last_name"];
        $actorNuevo->rating=$datos["rating"];
        $actorNuevo->save();

        return back()->with('mensaje','Actor Agregado :)!!');
    }
}
