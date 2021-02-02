@extends("theme/$theme/layaut")
@section('content') 

    {{-- <form action="{{ route('descuentos1.create')}}" method="POST"> --}}
    <form enctype="multipart/form-data" action="{{ route('promo.store') }}" method="POST">

        
    @csrf
    {{-- @method('PUT') --}}

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong style=" font-family: inherit;
                font-weight: bold;
                color: #000033; padding-bottom: 2%;" >Seleccionar Suegrero Blue:</strong>
                @if ($errors->any() AND $errors->get('select'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('select') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <select style="width: 200px;" class="js-example-basic-multiple" multiple="multiple"  name="select[]">
                  
                    @foreach($usuarios as $usuario)
                        @if($usuario->rolid==1) 
                            <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                        @endif
                    @endforeach
                </select>

                      

            </div>  
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                 <strong style=" font-family: inherit;
                 font-weight: bold;
                 color: #000033; padding-bottom: 2%;" class="camPromo">Seleccionar Promo:</strong>
                @if ($errors->any() AND $errors->get('selectPromo'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('selectPromo') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                 @endif
                <select name="selectPromo" id="selectPromo" class="form-control" id="usuario">
                    <option disabled selected>Elige Promo</option>
                        @foreach($promos as $promo)
                         <option value="{{$promo->link."|".$promo->id}}">{{$promo->name}}</option>
                        @endforeach
                </select>
                <div id="div"></div>
            </div> 
        </div>
       {{--  <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong style=" font-family: inherit;
                font-weight: bold;
                color: #000033; padding-bottom: 2%;" >Seleccionar Nacionalidad:</strong>
                @if ($errors->any() AND $errors->get('selectNacionalidad'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('selectNacionalidad') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <select style="width: 200px;" id="nacionalidad" class="js-example-basic-multiple" multiple="multiple"  name="selectNacionalidad[]">
                            <option value="0">TODAS</option>
                    @foreach($nacionalidades as $nacionalidad)
                       
                            <option value="{{$nacionalidad->id}}">{{$nacionalidad->GENTILICIO_NAC}}</option>
                      
                    @endforeach
                </select>

                      

            </div>  
        </div>  --}}
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <label style=" font-family: inherit;
                font-weight: bold;
                color: #000033; padding-bottom: 2%;" >Subir Imagen Ocio:</label>
                    @if ($errors->any() AND $errors->get('imagen1') )
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->get('imagen1') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <input accept="image/*" type="file" name="imagen1" >   
            </div>  
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6"> 
            <div class="form-group">
                <label style=" font-family: inherit;
                font-weight: bold;
                color: #000033; padding-bottom: 2%;" >Subir Imagen Descuentos:</label>
                    @if ($errors->any() AND $errors->get('imagen2') )
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->get('imagen2') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                             </ul>
                        </div>
                     @endif
                    <input accept="image/*" type="file" name="imagen2" >   
            </div> 
        </div>  
        <div class="col-xs-6 col-sm-6 col-md-6">                  
            <div class="form-group">
                <label style=" font-family: inherit;
                font-weight: bold;
                color: #000033; padding-bottom: 2%;" >Fecha Inicio Vigencia:</label>
                @if ($errors->any() AND $errors->get('fecha1'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('fecha1') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                 @endif
                <div class="input-group date">
                     <div class="input-group-addon">
                     <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="fecha1" class="form-control pull-right" id="datepicker1">
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6"> 
            <div class="form-group">
                <label style=" font-family: inherit;
                font-weight: bold;
                color: #000033; padding-bottom: 2%;" >Fehca Fin Vigencia:</label>
                @if ($errors->any() AND $errors->get('fecha2'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('fecha2') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="input-group date">
                     <div class="input-group-addon">
                     <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="fecha2" class="form-control pull-right" id="datepicker">
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12"> 
            <div class="form-group">
                <label style=" font-family: inherit;
                font-weight: bold;
                color: #000033; padding-bottom: 2%;" >Mensaje:</label>
                @if ($errors->any() AND $errors->get('mensaje'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('mensaje') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                 @endif
                <textarea class="form-control" name="mensaje" rows="3" placeholder="Escribir mensaje sobre promo ..."></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn colorBtn">GUARDAR PROMO</button>
        </div>
    </div>
</form>
 
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('select').material_select();
            $('#selectPromo').on('change', function() {
            alert( this.value );
            });

        });
    </script>
    
@endsection