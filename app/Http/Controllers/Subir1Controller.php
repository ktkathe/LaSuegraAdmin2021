<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subir1;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use Input;
use Storage;


class Subir1Controller extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('imagenPromos.index');
    }
    public function index1()
    {
        return view('imagenPromos.index1');
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request) {
         $validatedData = $request->validate([
            'imagen1' => 'required',
            'nombreImg' => 'required|max:255',
           
        ]);
       

        $image = $request->file('imagen1');
        $image->move('uploadsPromos',time()."_".$image->getClientOriginalName());
        $nombre1 =  time()."_".$image->getClientOriginalName();

        $promos = new Subir1;
      
        $promos->link = $nombre1;
        $promos->name = $request->nombreImg;

        $promos->save();

        return redirect()->route('home')->with('success', 'Imagen Promo, Guardada Satisfactoriamente !');

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
