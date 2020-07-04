<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ public_path('../resources/views/pdf/boostrap/bootstrap.min.css') }}" rel="stylesheet"
        type="text/css" />
    <style>
        img {
            width: 20%;
        }

        h3 {
            text-align: center;
        }

        small {
            margin-top: 20%;
        }

        #titulo {
            text-align: center;
        }

        #membrete {
            text-align: center;
            margin-top: 35px;
        }

        #fecha {
            margin-right: 15px;
        }

        @font-face {
            font-family: 'Times-Bold';
            src:"{{ public_path('../storage/fonts/Times-Bold') }}"
        }

        body {
            font-family: 'Times-Bold';
        }

        table {
            border-collapse: separate;

        }

        #tabla {

            margin-top: -150px;

        }

    </style>
</head>

<body>
    <div class="row">
        <img class="align-left" src="{{ public_path('../public/assets/admin/images/icon/sampwdawdle.png') }}">
        <h3 class="float-center" id="titulo">VenMex - Agencia de festejos</h3>
        <div class="float-right">
            Fecha:<br>
            <div id="fecha"> {{ $date }} </div>

        </div>
        <br>

        <div id="membrete">

            <p class="float-center">J-24554809-0</p>
            <small class="float-center">La Victoria Edo. Aragua, Cl. Juan Vicente Boliva</small> <br>
            <small class="float-center">Telefono: 0412-3186547</small> /
            <small class="float-center">Correo: venmex@gmail.com</small>

        </div>

    </div>

    <div id="tabla">
    <h2 class="text-center">Recibo individual justificativo del pago de salarios</h2> <br>

       <div class="rectangulo col-md-6 float-left">
       EMPRESA: VenMex <br>
       DOMICILIO: La Victoria Edo. Aragua, Cl. Juan Vicente Boliva<br>
       RIF: J-24554809-0 <br>
       NIF: 

    </div>
    <div class="rectangulo col-md-6 float-right">
    @foreach($info as $item)
                       
                    
    EMPLEADO: {{$item->name}}  {{$item->lastname}}  <br>
       CEDULA: {{$item->tipo_c}}-{{$item->identification}} <br>
       TIPO DE SALARIO: Por hora <br>
       OFICIO: {{$item->oficio}}<br>
       @endforeach
       </div>

       
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
   
    

       
<div class="detalle">

<table style="width:100%">
  <tr>
    <th>Descripción de conceptos</th>
    <th>Horas</th>
    <th>Salario por hora</th>
  </tr>
  <tr>
  @foreach($info as $item)
    <td>Horas trabajadas por el empleado</td>
    <td>{{$item->horas}}</td>
    <td>{{number_format($item->cantidad)}}</td>
    @endforeach
  </tr>
  
  @php
    $total = $sumar;
@endphp
</table>
<br>
<div class="rectangulo2 col-md-6 float-right text-center " >
    @foreach($info as $item)
              <strong> Total de asignaciones: </strong><BR>        
                    

               {{number_format($item->total)}} Bs.S<br>
               
@php
    $total2 = $item->total - $total;
 
@endphp

       @endforeach
       </div>
       <br>
       <br>  <br>
<table style="width:100%">

<tr>
<th>Descripción de las deducciones</th>
   <th>Cantidad</th>
   </tr>

@foreach($info2 as $item)

  <tr>
 @if($sumar != '0')
 <td>{{$item->razon}}</td>
    <td>{{number_format($item->cantidad2)}}</td>

 @else
 <td>N/A</td>
    <td>0</td>
    @endif
    @endforeach

  </tr>

</table>
<br>

       <div class="rectangulo2 col-md-6 float-right text-center">

               <strong>Total deducciones:</strong> <BR>        
                    

               {{number_format($sumar)}} Bs.S<br>
   
       </div>
       <br><br>
       <br><br>
       <div class="rectangulo2 col-md-6 float-right text-center" style="width:100%">

<strong>Total neto a pagar:</strong> <BR>     



{{number_format($total2)}}Bs.S<br>

</div>

</div>


</body>

</html>

<style>
table, th, td {
  border: 2px solid #555 ;
  border-collapse: collapse;
}

.rectangulo {
     width: 220;
     height: 120px; 
     border: 3px solid #555;
}

.rectangulo2 {
     width: 210;
     height: 50px; 
     border: 2px solid #555;
     border-collapse: collapse;
}

.rectangulo3 {
     width: 215;
     height: 20px; 
     border: 2px solid #555;
     border-collapse: collapse;
}
</style>