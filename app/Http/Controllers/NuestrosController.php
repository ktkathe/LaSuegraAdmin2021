<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Admin\Menu;
use App\descuentos\Descuentos;
use App\nacionalidad;
use App\categorias;
use App\paises;
use App\nuestros;

 


class NuestrosController extends Controller
{
    
    public function index(){
        $paises = paises::all();
        $categorias = categorias::all();

        return view('nuestros.index', compact('paises','categorias'));
    }

    
    public function create()
    {
       
    }

    
    public function store(Request $request){
        $validatedData = $request->validate([
            'amigo' => 'required|max:255',
            'categoria' => 'required',
            'nacion' => 'required',
            'imagenLogo' => 'required',
            'mensaje' => 'required|max:255',
            'convenio' => 'required',
               
        ]);

        $image = $request->file('imagenLogo');
        $image->move('uploadsNuestros',time()."_".$image->getClientOriginalName());
        $nombre1 =  time()."_".$image->getClientOriginalName();

        $nuestros = new nuestros;
        
        $nuestros->nombreAmigo = $request->amigo;
        $nuestros->id_categoria = $request->categoria;
        $nuestros->id_pais = $request->nacion;
        $nuestros->mensaje = $request->mensaje;
        $nuestros->link = $nombre1;
        $nuestros->estado_compra = $request->convenio;

        $nuestros->save();

        return redirect()->route('home')->with('success', 'Nuestro Amigo, Guardado Satisfactoriamente !');
       
       
    }

   
    public function show($id)
    {
       
    }

    
    public function edit($id)
    {
        
    }

   
    public function update(Request $request, $id)
    {
        
    }

  
    public function destroy($id)
    {
        
    }
}
