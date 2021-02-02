<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Admin\Menu;
use App\descuentos\Descuentos;
use App\nacionalidad;
use App\Grupo;


use App\descuentos\Descuentos1;


 
class DescuentoPG1Controller extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
      
       
    }
   
    

    public function create(){
        
    }

   
    public function store(Request $request){
        
        $promos = Descuentos::all();  
        $validatedData = $request->validate([
            'selectGrupo' => 'required',
               
        ]);


        $array= $request->selectGrupo;

        $usuarios = Grupo::whereIn('nombre', $array)
        ->join('users', 'users.id', '=', 'grupo.id_usuario')
        ->select('id_usuario','users.*')
        ->get();

        
        return view('descuentos.index1', compact('usuarios','promos'));
    

    
      
    }
   
  
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
   
}
