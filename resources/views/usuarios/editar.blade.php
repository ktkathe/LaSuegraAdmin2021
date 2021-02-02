@extends("theme/$theme/layaut")
@section('content') 
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-center">
                <h2 class="editarh2">EDITAR SUEGRERO</h2>
            </div>
         </div>
    </div>


{{-- 
@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif --}}
    <form action="{{ route('usuarios1.update',$usuario->id) }}" method="POST">
        
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->get('name') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <input type="text" name="name" value="{{ $usuario->name }}" class="form-control" placeholder="Nombre ">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Correo:</strong>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->get('mail') as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <input type="mail" name="mail" value="{{ $usuario->mail }}" class="form-control" placeholder="Correo ">
                </div>        
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12" style="display: none;">
                <div class="form-group">
                    <strong>Ciudad:</strong>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->get('city') as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                        <input type="text" name="city" value="{{ $usuario->city }}" class="form-control" placeholder="Ciudad ">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cumpleaños:</strong>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->get('birthDate') as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <input type="text" name="birthDate" value="{{ $usuario->birthDate }}" class="form-control" placeholder="Ciudad ">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn colorBtn">ACTUALIZAR REGISTRO</button>
            </div>
        </div>
    </form>
@endsection 