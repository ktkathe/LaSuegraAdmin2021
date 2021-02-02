@extends("theme/$theme/layaut")
@section('content') 

   
    <form enctype="multipart/form-data" action="{{ route('promoP.store') }}" method="POST">

        
    @csrf
    {{-- @method('PUT') --}}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h3 style="color:#000033; margin-bottom: 5%; text-align: center;font-weight: bold">¡Seleccionar Nacionalidad Suegrero Blue!</h3>
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 text-center">
            
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong style=" font-family: inherit;
                    font-weight: bold;
                    color: #000033; padding-bottom: 2%;" >Seleccionar Nacionalidad:</strong>
                    {{--  @if ($errors->any() AND $errors->get('selectNacionalidad'))
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->get('selectNacionalidad') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif  --}}
                    
                    <select style="width: 200px;" id="nacionalidad" class="js-example-basic-multiple" multiple="multiple"  name="selectNacionalidad[]">
                                <option value="0">TODAS</option>
                        @foreach($nacionalidades as $nacionalidad)
                        
                                <option value="{{$nacionalidad->GENTILICIO_NAC}}">{{$nacionalidad->GENTILICIO_NAC}}</option>
                        
                        @endforeach
                    </select>

                        

                </div>  
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 text-center">
                <button type="submit" class="btn colorBtn">SELECCIONAR</button>
            </div>
            <div class="col-xs-2 col-sm-2 col-md-2 text-center">
            
            </div>
    </div>
</form>

 
@endsection

   

