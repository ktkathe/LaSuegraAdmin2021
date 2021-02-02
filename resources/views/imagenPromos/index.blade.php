@extends("theme/$theme/layaut")
@section('content') 
   
    <form enctype="multipart/form-data" action="{{ route('subirPromo.store') }}" method="POST">

        
    @csrf
    {{-- @method('PUT') --}}

    <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <h3 style="color:#000033; margin-bottom: 5%; text-align: center;font-weight: bold">¡Subir Imagen principal del Patrocinador Blue!</h3>
         </div>
      
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <label style=" font-family: inherit;
                font-weight: bold;
                color: #000033; padding-bottom: 2%;" >Subir Imagen promo:</label>
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
                color: #000033; padding-bottom: 2%;" >Nombre Imagen:</label>
                @if ($errors->any() AND $errors->get('nombreImg'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('nombreImg') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                 @endif
                <input type="text "class="form-control" name="nombreImg"  placeholder="Escribir Nombre de la imagen">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="margin-top: 3%;">
            <button type="submit" class="btn colorBtn">GUARDAR IMAGEN</button>
        </div>
    </div>
</form>

@endsection

    