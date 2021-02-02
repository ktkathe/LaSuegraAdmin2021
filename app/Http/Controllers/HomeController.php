<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin\Menu;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

  
    public function index(Request $request){
      
        $nombre = $request->get('buscarpor');
        $usuarios = Menu::where('name','like',"%$nombre%")->paginate(6);
        return view('usuarios.index', compact('usuarios'));
    }
    public function editar($id) {
      
    }
    
    public function eliminar($id) {
        $id =Menu::where('id',$id)->firstOrFail();
        $id->delete();
        return redirect()->route('home')
        ->with('success','¡ Suegrero Eliminado !');
    }

    //metodo edutar blue y platino
    public function platino($id) {
        
        Menu::where('id',$id)->update(['rolid'=>0]);

        return redirect()->route('home')->with('success', 'Suegrero Ahora Es PLATINO');
       
     }
     public function blue($id) {
        Menu::where('id',$id)->update(['rolid'=>1]);

        return redirect()->route('home')->with('success', 'Suegrero Ahora Es BLUE');
        
     }

    //metodo que trae los datos segun id
    public function show($id) {
        $usuario = Menu::findOrFail($id);
        return view('usuarios.editar', compact('usuario'));
     }
      //metodo ver mas
    public function showUsuario($id) {
        $usuario = Menu::findOrFail($id);

        $c3 = DB::table('validatedescuentos')->select('imgDescuento','idUser','mensaje','fechaIni','fechaFin','imgLinkDescuento','estado')->where('idUser', '=', $id)->get();

        return view('usuarios.ver', compact('usuario','c3'));         
     }
     //consultar ciudad
     public function consultar() {
        $c1 = DB::table('users') 
        ->select('city')
        ->where('city','1')
        ->count();
        $c2 = DB::table('users') 
        ->select('city')
        ->where('city','2')
        ->count();
        $c3 = DB::table('users') 
        ->select('city')
        ->where('city','3')
        ->count();
        $c4 = DB::table('users') 
        ->select('city')
        ->where('city','4')
        ->count();
        $c5 = DB::table('users') 
        ->select('city')
        ->where('city','5')
        ->count();
        $c6 = DB::table('users') 
        ->select('city')
        ->where('city','6')
        ->count();
        $c7 = DB::table('users') 
        ->select('city')
        ->where('city','7')
        ->count();
        $c8 = DB::table('users') 
        ->select('city')
        ->where('city','8')
        ->count();
        $c9 = DB::table('users') 
        ->select('city')
        ->where('city','9')
        ->count();
        $c10 = DB::table('users') 
        ->select('city')
        ->where('city','10')
        ->count();
        $c11 = DB::table('users') 
        ->select('city')
        ->where('city','11')
        ->count();
        $c12 = DB::table('users') 
        ->select('city')
        ->where('city','12')
        ->count();
        $c13 = DB::table('users') 
        ->select('city')
        ->where('city','13')
        ->count();
        $c14 = DB::table('users') 
        ->select('city')
        ->where('city','14')
        ->count();
        $c15 = DB::table('users') 
        ->select('city')
        ->where('city','15')
        ->count();
        $c16 = DB::table('users') 
        ->select('city')
        ->where('city','16')
        ->count();
        $c17 = DB::table('users') 
        ->select('city')
        ->where('city','17')
        ->count();
        $c18 = DB::table('users') 
        ->select('city')
        ->where('city','18')
        ->count();
        $c19 = DB::table('users') 
        ->select('city')
        ->where('city','19')
        ->count();
        $c20 = DB::table('users') 
        ->select('city')
        ->where('city','20')
        ->count();
        $c21 = DB::table('users') 
        ->select('city')
        ->where('city','21')
        ->count();
        $c22 = DB::table('users') 
        ->select('city')
        ->where('city','22')
        ->count();
        $c23 = DB::table('users') 
        ->select('city')
        ->where('city','23')
        ->count();
        $c24 = DB::table('users') 
        ->select('city')
        ->where('city','24')
        ->count();
        $c25 = DB::table('users') 
        ->select('city')
        ->where('city','25')
        ->count();
        $c26 = DB::table('users') 
        ->select('city')
        ->where('city','26')
        ->count();
        $c27 = DB::table('users') 
        ->select('city')
        ->where('city','27')
        ->count();
        $c28 = DB::table('users') 
        ->select('city')
        ->where('city','28')
        ->count();
        $c29 = DB::table('users') 
        ->select('city')
        ->where('city','29')
        ->count();
        $c30 = DB::table('users') 
        ->select('city')
        ->where('city','30')
        ->count();
        $c31 = DB::table('users') 
        ->select('city')
        ->where('city','31')
        ->count();
        $c32 = DB::table('users') 
        ->select('city')
        ->where('city','32')
        ->count();
        $c33 = DB::table('users') 
        ->select('city')
        ->where('city','33')
        ->count();
        $c34 = DB::table('users') 
        ->select('city')
        ->where('city','34')
        ->count();
        $c35 = DB::table('users') 
        ->select('city')
        ->where('city','35')
        ->count();
        $c36 = DB::table('users') 
        ->select('city')
        ->where('city','36')
        ->count();
        $c37 = DB::table('users') 
        ->select('city')
        ->where('city','37')
        ->count();
        $c38 = DB::table('users') 
        ->select('city')
        ->where('city','38')
        ->count();
        $c39 = DB::table('users') 
        ->select('city')
        ->where('city','39')
        ->count();
        $c40 = DB::table('users') 
        ->select('city')
        ->where('city','40')
        ->count();
        $c41 = DB::table('users') 
        ->select('city')
        ->where('city','41')
        ->count();
        $c42 = DB::table('users') 
        ->select('city')
        ->where('city','42')
        ->count();
        $c43 = DB::table('users') 
        ->select('city')
        ->where('city','43')
        ->count();
        $c44= DB::table('users') 
        ->select('city')
        ->where('city','44')
        ->count();
        $c45 = DB::table('users') 
        ->select('city')
        ->where('city','45')
        ->count();
        $c46 = DB::table('users') 
        ->select('city')
        ->where('city','46')
        ->count();
        $c47 = DB::table('users') 
        ->select('city')
        ->where('city','47')
        ->count();
        $c48 = DB::table('users') 
        ->select('city')
        ->where('city','48')
        ->count();
        $c49 = DB::table('users') 
        ->select('city')
        ->where('city','49')
        ->count();
        $c50 = DB::table('users') 
        ->select('city')
        ->where('city','50')
        ->count();
        $c51 = DB::table('users') 
        ->select('city')
        ->where('city','51')
        ->count();
        $c52 = DB::table('users') 
        ->select('city')
        ->where('city','52')
        ->count();
        $c53 = DB::table('users') 
        ->select('city')
        ->where('city','53')
        ->count();
        return view('ciudad.index', compact('c1','c2','c3','c4','c5','c6','c7','c8','c9','c10','c11','c12','c13','c14','c15','c16','c17','c18','c19','c20','c21','c22','c23','c24','c25','c26','c27','c28','c29','c30','c31','c32','c33','c34','c35','c36','c37','c38','c39','c39','c40','c41','c42','c43','c44','c45','c46','c47','c48','c49','c50','c51','c52','c53'));
      
     }

     //metodo para actualizar registro usuario
     public function update(Request $request,$id){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'mail' => 'required|max:255|email|unique:users,mail,'.$id,
            'city' => 'required|max:100',
            'birthDate' => 'required|max:255',
            
            
        ]);
        Menu::whereId($id)->update($validatedData);

        return redirect()->route('home')->with('success', 'Suegrero se actualizó correctamente');
}

    
}
