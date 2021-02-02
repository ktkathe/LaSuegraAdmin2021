<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ValidateDescuentos;
use App\ValidateOcios;
use App\ValidateDescuentos1;
use App\ValidateOcios1;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Input;
use Storage;


class Promo1Controller extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index()
    {
        
    }

 
    public function create(){
       
       
    }



        
    public function store(Request $request){

        $validatedData = $request->validate([
            'select' => 'required',
            'selectPromo' => 'required',
            'imagen1' => 'required',
            'imagen2' => 'required',
            'fecha1' => 'required',
            'fecha2' => 'required',
            'mensaje' => 'required|max:255',
               
        ]);

        $image = $request->file('imagen1');
        $image->move('uploads',time()."_".$image->getClientOriginalName());
        $nombre1 =  time()."_".$image->getClientOriginalName();

            
        $image2 = $request->file('imagen2');
        $image2->move('uploads2',time()."_".$image2->getClientOriginalName());
        $nombre2 =  time()."_".$image2->getClientOriginalName();


        $array= $request->select;

     
        for($x=0; $x<count($array); $x++){
            $promos = new ValidateDescuentos1;
            $promos1 = new ValidateOcios1;

            $promos->imgDescuento = $request->imgPromo;
            $promos1->imgPromo = $request->imgPromo;

            $promos->idUser = $array[$x];
            $promos1->idUser = $array[$x];

            $promos->estado = 1;
            $promos1->estado = 1;

            $promos->mensaje = $request->mensaje;
            $promos1->mensaje = $request->mensaje;

            $promos->fechaIni = $request->fecha1;
            $promos1->fechaIni = $request->fecha1;

            $promos->fechaFin = $request->fecha2;
            $promos1->fechaFin = $request->fecha2;

            $promos->imgLinkDescuento = $nombre2;
            $promos1->imgLinkFinal = $nombre1;

            $promos->save();
            $promos1->save();


        }

        return redirect()->route('home')->with('success', 'Promo, Guardada Satisfactoriamente !');

  
       
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
