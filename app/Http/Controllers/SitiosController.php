<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sitios;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Input;
use Storage;

class SitiosController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('sitios.index');
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request) {
        $validatedData = $request->validate([
           'nombreSitio' => 'required|max:255',
           'direccionSitio' => 'required|max:255',
           'telefonoSitio' => 'required|max:255',
           'latSitio' => 'required|max:255',
           'logSitio' => 'required|max:255',
           'selectTipo' => 'required',


       ]);
      


       $sitios = new Sitios;
     
       $sitios->nameSite = $request->nombreSitio;
       $sitios->address = $request->direccionSitio;
       $sitios->telephone = $request->telefonoSitio;
       $sitios->lactitude = $request->latSitio;
       $sitios->length = $request->logSitio;
       $sitios->sed = "1";
       $sitios->horarios = "1";
       $sitios->horarios1 = "1";
       $sitios->horarios2 = "1";
       $sitios->horarios3 = "1";
       $sitios->horarios4 = "1";
       $sitios->horarios5 = "1";
       $sitios->horarios6 = "1";
       $sitios->type = $request->selectTipo;


       $sitios->save();

       return redirect()->route('home')->with('success', 'Sitio, Guardada Satisfactoriamente !');

   }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
