@extends("theme/$theme/layaut")
@section('content') 
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-center">
                <h2 class="editarh2">Historial Promos</h2>
            </div>
         </div>
    </div>
    <div class="row">
        <table style="text-align: center;" class="table table-bordered">
            <tr>
                <th colspan="5" style="text-align: center;">{{ $usuario->name }}
                    @if($usuario->rolid==1)
                        SOCIO - BLUE
                    @endif
                    @if($usuario->rolid==0)
                        SOCIO - PLATINO
                     @endif
                </th>
             </tr>

            <tr>
                <th  style="text-align: center;">PROMO</th>
                <th  style="text-align: center;">MENSAJE</th>
                <th  style="text-align: center;">FECHA VALIDAD INICIO</th>
                <th  style="text-align: center;">FECHA VALIDAD FIN</th>
                <th  style="text-align: center;">ESTADO</th>

            </tr>
           
            @foreach ($c3 as $cs)
                <tr>
                    <td><img src="{{asset("uploads2/$cs->imgLinkDescuento")}}" width="150px" height="150px"></td>     
                    <td>{{$cs->mensaje}}</td>
                    <td>{{$cs->fechaIni}}</td>
                    <td>{{$cs->fechaFin}}</td>
                    @if($cs->estado==0)
                        <td>UTILIZADO</td>
                    @endif
                    @if($cs->estado==1)
                        <td>NO UTILIZADO</td>
                    @endif


                </tr>
            @endforeach
        </table>
    </div>

@endsection 