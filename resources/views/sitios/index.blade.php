@extends("theme/$theme/layaut")
@section('content') 
   
    <form action="{{ route('sitiosCrear.store') }}" method="POST">

        
    @csrf
    {{-- @method('PUT') --}}

    <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <h3 style="color:#000033; margin-bottom: 5%; text-align: center;font-weight: bold">¡Crear Sitio La Suegra!</h3>
         </div>
        
        <div class="col-xs-6 col-sm-6 col-md-6"> 
            <div class="form-group">
                <label style=" font-family: inherit;
                font-weight: bold;
                color: #000033; padding-bottom: 2%;" >Nombre Sitio:</label>
                @if ($errors->any() AND $errors->get('nombreSitio'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('nombreSitio') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                 @endif
                <input type="text "class="form-control" name="nombreSitio"  placeholder="Escribir Nombre Del Sitio">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6"> 
            <div class="form-group">
                <label style=" font-family: inherit;
                font-weight: bold;
                color: #000033; padding-bottom: 2%;" >Dirección Sitio:</label>
                @if ($errors->any() AND $errors->get('direccionSitio'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('direccionSitio') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                 @endif
                <input type="text "class="form-control" name="direccionSitio"  placeholder="Escribir Dirección Del Sitio">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6"> 
            <div class="form-group">
                <label style=" font-family: inherit;
                font-weight: bold;
                color: #000033; padding-bottom: 2%;" >Teléfono Sitio:</label>
                @if ($errors->any() AND $errors->get('telefonoSitio'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('telefonoSitio') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                 @endif
                <input type="text "class="form-control" name="telefonoSitio"  placeholder="Escribir Teléfono Del Sitio">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6"> 
            <div class="form-group">
                <label style=" font-family: inherit;
                font-weight: bold;
                color: #000033; padding-bottom: 2%;" >Latitud Sitio:</label>
                @if ($errors->any() AND $errors->get('latSitio'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('latSitio') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                 @endif
                <input type="text "class="form-control" name="latSitio"  placeholder="Escribir Latitud Del Sitio">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6"> 
            <div class="form-group">
                <label style=" font-family: inherit;
                font-weight: bold;
                color: #000033; padding-bottom: 2%;" >Longitud Sitio:</label>
                @if ($errors->any() AND $errors->get('logSitio'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('logSitio') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                 @endif
                <input type="text "class="form-control" name="logSitio"  placeholder="Escribir Longitud Del Sitio">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6"> 
            <div class="form-group">
                <strong style=" font-family: inherit;
                font-weight: bold;
                color: #000033; padding-bottom: 2%;" >Seleccionar Tipo Sitio:</strong>
                @if ($errors->any() AND $errors->get('selectTipo'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('selectTipo') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <select name="selectTipo" class="form-control">
                      <option disabled selected>Elige Tipo Del Sitio</option>
                      <option value="1">DISCOTECA</option>
                      <option value="2">RESTAURANTE</option> 
                      <option value="3">PANADERÍA</option>             

                    </select>
            </div>  
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="margin-top: 3%;">
            <button type="submit" class="btn colorBtn">GUARDAR SITIO</button>
        </div>
    </div>
</form>

@endsection

    