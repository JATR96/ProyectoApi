<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function ObtenerPersona($id){

        //Buscar Base datos
        $persona = Persona::find($id);

        return response()->json($persona);
    }

    public function CrearPersona(Request $request){

        $json = $request->all();

        $persona = new Persona;
        $persona -> Dni = $json['Dni'];
        $persona -> Nombre = $json['Nombre'];
        $persona -> Apellido = $json['Apellido'];
        $persona -> Genero = $json['Genero'];
        $persona -> Edad = $json['Edad'];

        $persona -> save();
        

        return "El usuaruo con el id : " . $persona->id . " ha sido creado ";
    }

    public function ModificarPersona(Request $request, $id){

        $persona = Persona::find($id);

        $json = $request->all();

        
        $persona -> Dni = $json["Dni"];
        $persona -> Nombre = $json['Nombre'];
        $persona -> Apellido = $json['Apellido'];
        $persona -> Genero = $json['Genero'];
        $persona -> Edad = $json['Edad'];

        $persona -> save();

        return "El usuaruo con el id : " . $id ."y DNI ".$persona->Dni." ha sido modificado ";
    }

    public function EliminarPersona($id) {

        $persona = Persona::find($id);
        $persona -> delete();

        return "El usuaruo con el id : " . $id . " ha sido eliminado ";
    }
}
