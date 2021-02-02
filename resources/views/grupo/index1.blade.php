@extends("theme/$theme/layaut")
@section('content') 

   
    <form enctype="multipart/form-data" action="{{ route('grupo2.store') }}" method="POST">

        
    @csrf


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h3 style="color:#000033; margin-bottom: 5%; text-align: center;font-weight: bold">¡Crear Grupo Suegreros Platino!</h3>
        </div>
         <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
               <label style=" font-family: inherit;
                font-weight: bold;
                color: #000033; padding-bottom: 3%;" >Seleccionar Suegreros Platino:</label>
                @if ($errors->any() AND $errors->get('select'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('select') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                <select style="width: 250px;" class="js-example-basic-multiple" multiple="multiple"  name="select[]">
                  
                    @foreach($usuarios as $usuario)
                        @if($usuario->rolid==0) 
                            <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                        @endif
                    @endforeach
                </select>
                      

            </div>  
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4"> 
            <div class="form-group">
                <label style=" font-family: inherit;
                font-weight: bold;
                color: #000033; padding-bottom: 2%;" >Nombre Grupo:</label>
                @if ($errors->any() AND $errors->get('nombre'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('nombre') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                 @endif
                <input class="form-control" name="nombre"  placeholder="Escribir Nombre Grupo ...">
            </div>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 text-center">
            <button style="margin-top:9%;" type="submit" class="btn colorBtn">GUARDAR GRUPO</button>
        </div>
       
    </div>
</form>
 
@endsection
