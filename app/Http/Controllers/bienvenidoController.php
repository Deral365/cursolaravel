<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bienvenidoController extends Controller
{
    public function bienvenido(){
        $nombre = "Perez";
        $alumnos=['Ximena','Perez','Sergio','Evelyn','Dani','juan','david','kyan','eitan','adrian','leo'];
        $datos=array(['nombre' => 'Ximena','edad' => 17,'turno'=>'Vespertino'],
        ['nombre' => 'Perez','edad' => 20,'turno'=>'Matutino'],
        ['nombre' => 'Evelyn','edad' => 15,'turno'=>'Nocturno'],
        ['nombre' => 'Sergio','edad' => 15,'turno'=>'Vespertino'],
        ['nombre' => 'Sergio','edad' => 15,'turno'=>'Matutino'],
        ['nombre' => 'Sergio','edad' => 15,'turno'=>'Matutino'],
        ['nombre' => 'Sergio','edad' => 15,'turno'=>'Vespertino']

    );
        return view('bienvenido',compact('nombre','alumnos','datos'));
    }
    public function inicio(){
        return view('inicio');
    }

}
