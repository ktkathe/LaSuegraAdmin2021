<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Admin\Menu;
use App\Grupo;
use App\nacionalidad;

use App\descuentos\Descuentos1;

class Grupo1Controller extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
      
       
       
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'select' => 'required',
            'nombre' => 'required|max:255',
               
        ]);

   
        $array= $request->select;

     
        for($x=0; $x<count($array); $x++){
            $grupos = new Grupo;
            $grupos->nombre = $request->nombre;
            $grupos->id_usuario = $array[$x];
            $grupos->id_rol = 0;
            $grupos->save();
          

        }

        return redirect()->route('home')->with('success', 'GRUPO, Guardado Satisfactoriamente !');

  
       
    }
   
}
