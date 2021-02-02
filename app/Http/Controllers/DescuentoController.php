<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Admin\Menu;
use App\descuentos\Descuentos;
use App\nacionalidad;
use App\Grupo;


use App\descuentos\Descuentos1;


 
class DescuentoController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
        $usuarios = Menu::all();
        $promos = Descuentos::all();
        $nacionalidades = nacionalidad::all();

        return view('descuentos.index', compact('usuarios','promos','nacionalidades'));
       
       
    }
    public function index1() {
        $usuarios = Menu::all();
        $promos = Descuentos1::all();
        return view('descuentos.index1', compact('usuarios','promos','nacionalidades'));
       
    }
    public function indexP() {
      
        $nacionalidades = nacionalidad::all();

        return view('descuentosP.index', compact('nacionalidades'));
       
       
    }
    public function indexP1() {
        $nacionalidades = nacionalidad::all();
       
       
        return view('descuentosP.index1', compact('nacionalidades'));
       
    }
    public function indexPG() {
      
        $grupos =Grupo::select('nombre')
        ->distinct()
        ->where('id_rol','=',1)
        ->get();
        return view('descuentosP.index3', compact('grupos'));
       
       
    }
    public function indexPG1() {
        $grupos =Grupo::select('nombre')
        ->distinct()
        ->where('id_rol','=',0)
        ->get();
        return view('descuentosP.index4', compact('grupos'));
       
    }
    public function promos($id){
        return Descuentos::where('id','=',$id)->get();
    }
    public function promos1($id){
        return Descuentos1::where('id','=',$id)->get();
    }
 

    public function create(){
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        
        $promos = Descuentos::all();  
        $validatedData = $request->validate([
            'selectNacionalidad' => 'required',
               
        ]);



        $array= $request->selectNacionalidad;
 

        if($array[0]=='0'){
            $usuarios = Menu::where("rolid","=",1)
            ->get();

        }else{
            $usuarios = Menu::where("rolid","=",1)
            ->whereIn('cityN', $array)
            ->get();

        }

     
        return view('descuentos.index', compact('usuarios','promos'));
      
    }
    public function store1(Request $request){
        
        $promos = Descuentos::all();  
        $validatedData = $request->validate([
            'selectNacionalidad' => 'required',
               
        ]);



        $array= $request->selectNacionalidad;
 

        if($array[0]=='0'){
            $usuarios = Menu::where("rolid","=",0)
            ->get();

        }else{
            $usuarios = Menu::where("rolid","=",0)
            ->whereIn('cityN', $array)
            ->get();

        }

     
        return view('descuentos.index1', compact('usuarios','promos'));
      
    }

  
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
   
}
