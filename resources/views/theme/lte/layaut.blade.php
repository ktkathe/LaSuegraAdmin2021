<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin|LaSuegra</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/font-awesome/css/font-awesome.min.css")}}">
        <!-- Ionicons -->
        <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/Ionicons/css/ionicons.min.css")}}">

        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/AdminLTE.min.css")}}">
         
        <link rel="manifest" href="{{request()->root()}}/manifest.json">

        <!-- AdminLTE Skins. Choose a skin from the css/skins
            folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/skins/_all-skins.min.css")}}">

        <!-- estilo kt -->
        <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/estiloKt/estilo1.css")}}">
        <!-- fechas -->
        <!-- bootstrap datepicker -->
        <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css")}}">
  
       <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
  
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-analytics.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.18.0/firebase-messaging.js"></script>

        <link rel="manifest" href="manifest.json">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition skin-blue layout-boxed sidebar-mini">
        @include("theme/$theme/header")
        @include("theme/$theme/aside")
      

        <!-- Site wrapper -->
        <div class="wrapper">
            <div class="content-wrapper">
                    <section class="content">
                        <div class="callout callout" style="background-color:#000033;color:#FFF; ">
                          <h4>MENSAJE</h4> 
                          <p>
                            @if ($message = Session::get('success'))
                              <div class="alert" style="background-color:#000033;color:#FFF;">
                                  <p style="font-size: 20px">{{ $message }}</p>
                              </div>
                            @endif
                        </p>
                        </div>
                        <!-- Default box -->
                        <div class="box">
                          <div class="box-header with-border">
                            <h3 class="box-title">SUEGREROS</h3>
                  
                            <div class="box-tools pull-right">
                              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fa fa-minus"></i></button>
                              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fa fa-times"></i></button>
                            </div>
                          </div>
                          <div class="box-body">
                            @yield('content')
                          </div>
    
                        </div>
                        <!-- /.box -->
                    </section>
            </div>
        </div>
        @include("theme/$theme/footer")
        <!-- jQuery 3 -->
        <script src="{{asset("assets/$theme/bower_components/jquery/dist/jquery.min.js")}}"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{asset("assets/$theme/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
        <!-- SlimScroll -->
        <script src="{{asset("assets/$theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
        <!-- FastClick -->
        <script src="{{asset("assets/$theme/bower_components/fastclick/lib/fastclick.js")}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{asset("assets/$theme/dist/js/demo.js")}}"></script>
        <script src="{{URL::asset('asset/js/bootstrap.min.js')}}"></script>
        <script src="{{asset("assets/$theme/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js")}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
        {{--  <script src="{{asset('/js/firebase.js')}}"></script>  --}}

     
        <script>
          $(document).ready(function() {
              //Date picker
              $('#datepicker').datepicker({
                autoclose: true
              })
              $('#datepicker1').datepicker({
                autoclose: true
              })
              // $('select').material_select();
              $('#selectPromo').on('change', function() {
                var cadena = this.value;
                separador = "|";
                limite    = 1;
            
                arregloDeSubCadenas = cadena.split(separador, limite);
                arregloDeSubCadenas1 = cadena.split(separador);

                document.getElementById("div").innerHTML='<img style="height:200px;width:200px;" class="img-thumbnail" src="uploadsPromos/'+arregloDeSubCadenas+'"/><input name="imgPromo" style="display:none;" value='+arregloDeSubCadenas1[1]+'>';
               });
               $('.js-example-basic-multiple').select2();


             });

              // Initialize Firebase
     
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyBr_PWjZ_iatbXEjiJmo9Zi9eoXLvbpw4c",
    authDomain: "velvety-ground-169815.firebaseapp.com",
    databaseURL: "https://velvety-ground-169815.firebaseio.com",
    projectId: "velvety-ground-169815",
    storageBucket: "velvety-ground-169815.appspot.com",
    messagingSenderId: "1085130972744",
    appId: "1:1085130972744:web:7017b79f69fc1dca1d027d",
    measurementId: "G-GVJH6B3BG4"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

   
            const messaging = firebase.messaging();
            messaging.usePublicVapidKey("BPra6L5yCTO7b-2_ElOSJXy3fhPR2365CZGLZ2E93SkSGMOu6N9imYFo5cjfBzBV0o4mKM3aQCa0aPD7jYV7nk0");
 




      </script>
    </body>