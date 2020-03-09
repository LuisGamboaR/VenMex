@extends ("partials.admin.layout")

@section("content")

<div class="page-content ">
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Eventos</h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-12 ">
                <div class="w3-show-inline-block mt-4 float-right col-12">

                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Añadir personal
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                            <button onclick="personal();" class="btn btn-primary"></span> Cocinero</button>
                            <button onclick="personal2();" class="btn btn-primary"></span> Mesonero</button>
                  

                        </div>
                        <button onclick="utileria();"  class="btn btn-primary"><span
                                    class="fa fa-user"></span> Añadir utileria</button>

                    </div>
                </div>
                <div class="block margin-bottom-sm">

                    <center>
                        <div class="title text-center"><strong>Registro de evento</strong></div>
                    </center>

                    <center>
                        <p>Los campos que contengan (<span style="color:red">*</span>) son
                            obligatorios</p>
                    </center>

                    <div class="card-body">
                        {!! Form::open(['route' => 'eventos.store', 'id' => 'formulario_registro_eventos']) !!}

                        @include('eventos.partials.form')

                        {!! Form::close() !!}

                    </div>

                    <p>Total: <span id="totalCompra"></span> BsS.</p>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection

<script>
    function personal() {

        var personal = `
    <div class="row">
    <div class="col mt-3">
        <label class="alinear">Mesonero<span style="color:red">*</span></label>
        <select class="form-control" id="mesonero" name="mesonero">
            <option value="12500">Adrian</option>
            <option value="12500">Nathan</option>

        </select>
    </div>
</div>
    `;

        $("#personal22").append(personal);
    }

    function personal2() {

var personal2 = `
<div class="row">

<div class="col mt-3">
<label class="alinear">Cocinero<span style="color:red">*</span></label>
<select class="form-control" class="" id="cocinero" name="cocinero">
    <option value="30000">Luis</option>
    <option value="25000">Tanaka</option>

</select>
</div>
</div>
`;

$("#personal22").append(personal2);
}


    function utileria() {

        var utileria = `
    <div class="row">
    <div class="col mt-3">
        <label class="alinear">Utileria<span style="color:red">*</span></label>
        <select class="form-control" id="utileria" name="nombre">
            <option value="1000">Mesas</option>
            <option value="500">Sillas</option>

        </select>
    </div>
    <div class="col mt-3">
        <label class="alinear">Cantidad<span style="color:red">*</span></label>
        {{ Form::text('cantidad', null, ['class' => "form-control $errors->has('cantidad') ? ' is-invalid' : ''", 'id' => 'cantidad', 'maxlength' => 99999999, 'placeholder' => 'Introduzca una cantidad']) }}
    </div>
</div>
    `;

        $("#utileria22").append(utileria);
    }






    function prueba() {

        console.log('funcionooo');

        var prueba = document.getElementById("cantidad[]").value;
        var prueba2 = document.getElementById("utileria").value;
        // var prueba3 = document.getElementById("mesonero").value;
        // var prueba4 = document.getElementById("cocinero").value;

        // var suma = prueba2 * prueba;
        // suma2 = parseInt(suma) + parseInt(prueba3) + parseInt(prueba4);
        // console.log(suma2);

        console.log(prueba);


        // document.getElementById('totalCompra').innerHTML = suma2;

        // document.getElementById("total2").value = total;

    }

</script>
