@extends("theme/$theme/layaut")
@section('content')
<!DOCTYPE html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://js.pusher.com/5.1/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('8a87aadaaeac477dbac9', {
      cluster: 'eu',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('form-submitted', function(data) {
        var d = JSON.stringify(data);
        var item = JSON.parse(d);
        console.log(item);
        document.getElementById("nameUser").innerHTML='<p><b>'+item['text']['name']+'</b></p>';
        if(item['text']['rolid']==0){
          document.getElementById("nameUser1").innerHTML='<p><b>SOCIO - PLATINO</b></p>';
        }
        else{
          document.getElementById("nameUser1").innerHTML='<p><b>SOCIO - BLUE</b></p>';
        }
    
       

      
      for (i = 0; i < item.text1.length; i++){
          if(item.text1[i].c>0){
            var qrUser = item.text1[i].idUser;
            var qrUser2 = item.text1[i].idUser;
            var qrPromo =item.text1[i].imgDescuento;
            var url = '{{ route("editarQr",[":id",":ids"])}}';
            var url2 = '{{ route("consultarCumpleanos",":id")}}';
            url = url.replace(':id',qrUser);
            url = url.replace(':ids',qrPromo);
            url2 = url2.replace(':id',qrUser2);

        


        $("#Table").append('<tr>' + 
            '<td align="center" style="dislay: none;"><img src="uploads2/'+ item.text1[i].imgLinkDescuento + '"/></td>'+
            '<td align="center" style="dislay: none;">' + item.text1[i].mensaje + '</td>'+
            '<td align="center" style="dislay: none;">' + item.text1[i].fechaIni + '</td>'+
            '<td align="center" style="dislay: none;">' + item.text1[i].fechaFin + '</td>'+
            '<td align="center" style="dislay: none;"><a class="btn btn-primary" href="' + url + '">Usar QR </a></td>'+'</tr>');

          }
          
      }

      if(item['text2']['visitas']==null){
          $("#Table").append('<tr>' + 
                '<td colspan="2" align="center" style="dislay: none;"></td>'+
                '<td class="success" colspan="2" align="center" style="dislay: none;size:32px;"><p style="font-size:20px;" ><b>Total Visitas Suegrero = 0 </b></p></td>'+
                '<td align="center" style="dislay: none;"><a class="btn btn-primary" href="' + url2 + '">CUMPLEAÑOS </a></td>'+'</tr>');

        
      }
      else{
        $("#Table").append('<tr>' + 
          '<td colspan="2" align="center" style="dislay: none;"></td>'+
          '<td class="success" colspan="2" align="center" style="dislay: none;size:32px;"><p style="font-size:20px;" ><b>Total Visitas Suegrero = '+ item['text2']['visitas'] +'</b></p></td>'+
          '<td align="center" style="dislay: none;"><a class="btn btn-primary" href="' + url2 + '">CUMPLEAÑOS </a></td>'+'</tr>');

     
      }
    });
  </script>
</head>
<body>
  <table id="Table" style="text-align: center;" class="table table-bordered">
    <tr>
      <td class="warning" colspan="5" id="nameUser"></td>
    </tr>
    <tr>
      <td class="warning" colspan="5" id="nameUser1"></td>
    </tr>
    <tr>
      <th  style="text-align: center;">PROMO</th>
      <th  style="text-align: center;">MENSAJE</th>
      <th  style="text-align: center;">FECHA VALIDAD INICIO</th>
      <th  style="text-align: center;">FECHA VALIDAD FIN</th>
      <th  style="text-align: center;">ACCIÓN</th>
    </tr>
    

  </table>

</body>

@endsection