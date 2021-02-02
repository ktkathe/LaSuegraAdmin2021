<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\FormQr;
use App\Admin\Menu;
use App\GetQr;
use App\ValidateOcios;
use App\ValidateDescuentos;
use App\Visits;
use App\cumpleanos;
use Carbon\Carbon;




use Illuminate\Support\Facades\DB;



class DatosController extends Controller
{
    
    public function index()
    {
     
        return view('datos.index');
        
    }

   
    public function create()
    {
        //
    }
    

  
    public function store(Request $request){
    }
    public function showUsarQr($id,$ids){
       
        ValidateDescuentos::where('imgDescuento',$ids)->where('idUser',$id)
       ->update(['estado'=>0]);
        ValidateOcios::where('imgPromo',$ids)->where('idUser',$id)
       ->update(['estado'=>0]);

       $visitas = new Visits;
       $visitas->quantity = 1;
       $visitas->idUser = $id;
       $visitas->save();

         return redirect()->route('datos')->with('success', 'Promo, se uso Satisfactoriamente !');

           
      
    }
    public function showUsarQr1($id){
        

        $fecha_actual = Carbon::now();
        $year = $fecha_actual->format('Y');
        $usuario = Menu::findOrFail($id);
        $cumpleanos = DB::table('cumpleanos')->select(DB::raw('MAX(ano) as ano'))->Where('idUser', '=' ,$id)->first();
    

        return view('datos.cumpleanos', compact('usuario','cumpleanos','year'));         
      
    }
    public function UsarPromoCumple($id){
    
        $fecha_actual = Carbon::now();
        $year = $fecha_actual->format('Y');
       
        $cumple = new cumpleanos;
        $cumple->ano = $year;
        $cumple->idUSer = $id;
        $cumple->save();

       return redirect()->route('datos')->with('success', 'Promo Cumpleaños, Usada Satisfactoriamente !');
      
    }
    
    public function show($id){
          
        $c1 = DB::table('giftsqr')->select('mailUser')->where('idQr', '=', $id)->first();
        $c2 = DB::table('users')->select('id','name','mail','rolid')->where('mail', '=', $c1->mailUser)->first();
        if($c2->rolid==0){
            $c3 = DB::table('validatedescuentos1')->select(DB::raw("DATEDIFF(STR_TO_DATE(fechaFin, '%m/%d/%y'),NOW()) as c,imgDescuento,idUser,mensaje,fechaIni,fechaFin,imgLinkDescuento"))->where('idUser', '=', $c2->id)->Where('estado', '=' ,'1')->get();
        }
        else{
            $c3 = DB::table('validatedescuentos')->select(DB::raw("DATEDIFF(STR_TO_DATE(fechaFin, '%m/%d/%y'),NOW()) as c,imgDescuento,idUser,mensaje,fechaIni,fechaFin,imgLinkDescuento"))->where('idUser', '=', $c2->id)->Where('estado', '=' ,'1')->get();
        }
        $c4 = DB::table('visits')->select(DB::raw('SUM(quantity) as visitas'))->Where('idUser', '=' ,$c2->id)->first();

        $text = $c2;
        $text1 = $c3;
        $text2 = $c4;


      
       event(new FormQr($text,$text1,$text2));
           
      
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
