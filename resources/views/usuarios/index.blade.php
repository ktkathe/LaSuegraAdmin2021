@extends("theme/$theme/layaut")
@section('content') 
<table style="text-align: center;" class="table table-bordered">
    <div class="input-group input-group-sm">
        <form>
            <input type="text" class="form-control" name="buscarpor" type="search" >
            <span class="input-group-btn">
                <button style="background-color: #000033;color: #FFF;font-weight: bold;borde:#000033;" type="submit" class="btn btn-info btn-flat">BUSCAR</button>
            </span>
        </form>
    </div>
    <tr>
        <th  style="text-align: center;">Nombre</th>
        <th  style="text-align: center;">Correo</th>
        <th  style="text-align: center;">Ciudad</th>
        <th  style="text-align: center;">Nacionalidad</th>

        <th  style="text-align: center;">Cumpleaños DD-MM</th>
        <th  style="text-align: center;">Socio</th>
        <th  style="text-align: center;" width="600px">Acción</th>
    </tr>
    @foreach ($usuarios as $usuario)
    <tr>
        <td>{{ $usuario->name }}</td>
        <td>{{ $usuario->mail }}</td>
        @if($usuario->city==1)
         <td>Madrid</td>
        @endif
        @if($usuario->city==2)
         <td>Barcelona</td>
        @endif
        @if($usuario->city==3)
         <td>Valencia</td>
        @endif
        @if($usuario->city==4)
         <td>Sevilla</td>
        @endif
        @if($usuario->city==5)
         <td>Zaragoza</td>
        @endif
        @if($usuario->city==6)
         <td>Málaga</td>
        @endif
        @if($usuario->city==7)
        <td>Murcia</td>
        @endif
        @if($usuario->city==8)
        <td>Palma</td>
        @endif
        @if($usuario->city==9)
            <td>Bilbao</td>
        @endif
        @if($usuario->city==10)
            <td>Alicante</td>
        @endif
        @if($usuario->city==11)
        <td>Córdoba</td>
       @endif
       @if($usuario->city==12)
        <td>Valladolid</td>
       @endif
       @if($usuario->city==13)
        <td>Vitoria</td>
       @endif
       @if($usuario->city==14)
        <td>La Coruña</td>
       @endif
       @if($usuario->city==15)
        <td>Granada</td>
       @endif
       @if($usuario->city==16)
        <td>Oviedo</td>
       @endif
       @if($usuario->city==17)
       <td>Santa Cruz</td>
       @endif
       @if($usuario->city==18)
       <td>Pamplona</td>
       @endif
       @if($usuario->city==19)
           <td>Almería</td>
       @endif
       @if($usuario->city==20)
           <td>Burgos</td>
       @endif
       @if($usuario->city==21)
        <td>Albacete</td>
       @endif
       @if($usuario->city==22)
        <td>Santander</td>
       @endif
       @if($usuario->city==23)
        <td>Castellón de la Plana</td>
       @endif
       @if($usuario->city==24)
        <td>Logroño</td>
       @endif
       @if($usuario->city==25)
        <td>Badajoz</td>
       @endif
       @if($usuario->city==26)
        <td>Huelva</td>
       @endif
       @if($usuario->city==27)
       <td>Salamanca</td>
       @endif
       @if($usuario->city==28)
       <td>Lérida</td>
       @endif
       @if($usuario->city==29)
           <td>Tarragona</td>
       @endif
       @if($usuario->city==30)
           <td>León</td>
       @endif
       @if($usuario->city==31)
       <td>Cádiz</td>
      @endif
      @if($usuario->city==32)
       <td>Jaén</td>
      @endif
      @if($usuario->city==33)
       <td>Orense</td>
      @endif
      @if($usuario->city==34)
       <td>Gerona</td>
      @endif
      @if($usuario->city==35)
       <td>Lugo</td>
      @endif
      @if($usuario->city==36)
       <td>Santiago de Compostela</td>
      @endif
      @if($usuario->city==37)
      <td>Cáceres</td>
      @endif
      @if($usuario->city==38)
      <td>CáMelilla</td>
      @endif
      @if($usuario->city==39)
          <td>Ceuta</td>
      @endif
      @if($usuario->city==40)
          <td>Guadalajara</td>
      @endif
      @if($usuario->city==41)
          <td>Toledo</td>
      @endif
      @if($usuario->city==42)
          <td>Pontevedra</td>
      @endif
      @if($usuario->city==43)
          <td>Palencia</td>
      @endif
      @if($usuario->city==44)
          <td>Ciudad Real</td>
      @endif
      @if($usuario->city==45)
          <td>Zamora</td>
      @endif
      @if($usuario->city==46)
          <td>Mérida</td>
      @endif
      @if($usuario->city==47)
          <td>Ávila</td>
      @endif
      @if($usuario->city==48)
          <td>Cuenca</td>
      @endif
      @if($usuario->city==49)
          <td>Huesca</td>
      @endif
      @if($usuario->city==50)
          <td>Segovia</td>
      @endif
      @if($usuario->city==51)
          <td>Soria</td>
      @endif
      @if($usuario->city==52)
          <td>Teruel</td>
      @endif
      @if($usuario->city==53)
          <td>San Sebastián</td>
      @endif
      <td>{{$usuario->cityN}}</td>
      <td>{{ $usuario->birthDate }}</td>
      @if($usuario->rolid==1)
      <td>BLUE</td>
      @endif
      @if($usuario->rolid==0)
      <td>PLATINO</td>
      @endif
      
        
        <td style="text-align:center" width="600px">
            @if($usuario->rolid==1)
                <a href="{{route('editarUsuarioPlatino',$usuario->id)}}" class="btn btn-primary">PLATINO</a>
            @endif
            @if($usuario->rolid==0)
             <a href="{{route('editarUsuarioBlue',$usuario->id)}}" class="btn btn-primary">&nbsp;&nbsp;&nbsp;&nbsp;BLUE&nbsp;&nbsp;&nbsp;</a>
            @endif
            <a href="{{route('verUsuario',$usuario->id)}}" class="btn btn-primary">VER MAS</a> 
            <a href="{{route('editarUsuario',$usuario->id)}}" class="btn btn-primary">ACTUALIZAR</a>
            <a  href="{{route('eliminarUsuario',$usuario->id)}}" class="btn btn-danger"   >ELIMINAR</a>
           
        </td>
    </tr>
    @endforeach
  </table>
  {{ $usuarios->links() }}
  
   <script>
    
           
            
         
        
         
    </script>
  @endsection