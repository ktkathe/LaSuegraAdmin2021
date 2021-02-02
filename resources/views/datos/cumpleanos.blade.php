@extends("theme/$theme/layaut")
@section('content') 
<table style="text-align: center;" class="table table-bordered">
    <tr>
        <th  style="text-align: center;">Nombre</th>
        <th style="text-align: center;">Cumpleaños DD-MM</th>
        <th style="text-align: center;">Año actual</th>
        <th  style="text-align: center;" width="230px">Acción</th>
    </tr>
    {{-- @foreach   ($usuarios as $usuario) --}}
  
    <tr>
        <td>{{ $usuario->name}}</td>
        <td>{{ $usuario->birthDate }}</td>
        <td>{{ $year}}</td>
        <td><a href="{{route('usarPromoCumple',$usuario->id)}}" class="btn btn-primary">Usar Promo Cumpleños</a> </td>     
  
    </tr>
  
    <tr>
        <th style="text-align: center;">Ultimo Año Usado</th>
    </tr>
    <tr>
    
        <td>{{ $cumpleanos->ano}}</td>
       
    </tr>
    {{-- @endforeach --}}
  </table>
  @endsection