@extends("theme/$theme/layaut")
@section('content') 


    <form enctype="multipart/form-data" action="{{ route('nuestros1.store') }}" method="POST">

        
    @csrf
 

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h3 style="color:#000033; margin-bottom: 5%; text-align: center;font-weight: bold">¡Ingresa Información de Nuestro Amigo!</h3>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4"> 
            <div class="form-group">
                <label style=" font-family: inherit;
                font-weight: bold;
                color: #000033;">Nombre Nuestro Amigo:</label>
                @if ($errors->any() AND $errors->get('amigo'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('amigo') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                 @endif
                <input class="form-control" name="amigo"  placeholder="Escribir Nombre Empresa ...">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                 <strong style=" font-family: inherit;
                 font-weight: bold;
                 color: #000033; padding-bottom: 5%;" class="camPromo">Seleccionar Catergoria:</strong>
                @if ($errors->any() AND $errors->get('categoria'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('categoria') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                 @endif
                <select style="margin-top:1.7%;" name="categoria" id="categoria" class="form-control" id="categoria">
                    <option disabled selected>Elige Categoria</option>
                        @foreach($categorias as $cate)
                         <option value="{{$cate->id}}">{{$cate->nombreCategoria}}</option>
                        @endforeach
                </select>
              
            </div> 
        </div>
           <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                 <strong style=" font-family: inherit;
                 font-weight: bold;
                 color: #000033; padding-bottom: 2%;" class="camPromo">Seleccionar Nación:</strong>
                @if ($errors->any() AND $errors->get('nacion'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('nacion') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                 @endif
                <select  style="margin-top:1.7%;" name="nacion" id="nacion" class="form-control" id="nacion">
                    <option disabled selected>Elige Nación</option>
                        @foreach($paises as $pais)
                         <option value="{{$pais->id}}">{{$pais->nombrePais}}</option>
                        @endforeach
                </select>
              
            </div> 
        </div>
     
        <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <label style=" font-family: inherit;
                font-weight: bold;
                color: #000033; padding-bottom: 2%;" >Subir Imagen Logo:</label>
                    @if ($errors->any() AND $errors->get('imagenLogo'))
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->get('imagenLogo') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <input accept="image/*" type="file" name="imagenLogo" >   
            </div>  
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4"> 
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
                <textarea class="form-control" name="mensaje" rows="1" placeholder="Escribir Mensaje Descuento ..."></textarea>
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4"> 
             <div class="form-group">
                 <strong style=" font-family: inherit;
                 font-weight: bold;
                 color: #000033; padding-bottom: 2%;" class="camPromo">Seleccionar Convenio:</strong>
                @if ($errors->any() AND $errors->get('convenio'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('convenio') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                 @endif
                <select  style="margin-top:3.7%;" name="convenio" id="convenio" class="form-control" id="convenio">
                    <option disabled selected>Elige Convenio</option>
                    <option value="0">BASICO</option>
                    <option value="1">PREMIUM</option>
                </select>
              
            </div> 
           
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn colorBtn">GUARDAR</button>
        </div>
    </div> 
</form>  
 
@endsection
{{--  @section('scripts')
    <script>
        $(document).ready(function() {
            $('select').material_select();
            $('#selectPromo').on('change', function() {
            alert( this.value );
            });

        });
    </script>
    
@endsection   --}}