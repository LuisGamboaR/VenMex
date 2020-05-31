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
        <div class="row">
            <div class="dt-responsive table-responsive">
                <h2 class="text-center">Listado de utileria</h2> <br>

                <table id="simpletable" class="table table-striped table-bordered  text-center">
                    <thead class=>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                                            <th>Cantidad</th>
                                            <th>Cantidad en uso</th>
                                            <th>Precio</th>
                                            <th>Descripción</th>


                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($utileria as $item)
                        <tr>

                            <td><b>{{ $i++ }}</b></td>


                            <td>{{$item->nombre}}</td>
                                            <td>{{$item->cantidad}}</td>
                                            <td>{{$item->cantidad_en_uso}}</td>
                                            <td>{{$item->precio}}</td>
                                            <td>{{$item->descripcion}}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>




</body>

</html>
