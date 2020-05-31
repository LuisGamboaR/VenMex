@extends ("partials.admin.layout")

@section("content")


<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <center>
                            <h4>Listado de personal</h4>
                        </center>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            <div class="float-right mb-2">

                                <a href="{{ route('personal.create') }}" class="btn btn-primary">Registrar personal</a>

                            </div>
                            <a href="{{ route('personals.pdf') }}" target="_blank" class="btn btn-primary mb-2 mt-2"
                                data-toggle="tooltip" data-placement="left" title="Generar pdf"> <i
                                    class="feather icon-file-text" style="font-size: 20px; "></i> Generar PDF</a>
                            <div class="dt-responsive table-responsive">
                                <table id="simpletable" class="table table-striped  nowrap text-center">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Cédula</th>
                                            <th>Telefono</th>
                                            <th>Correo</th>
                                            <th>Oficio</th>
                                            <th>Opciones</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($personal as $items)
                                        <tr>
                                            <td>{{$items->nombre}}</td>
                                            <td>{{$items->apellido}}</td>
                                            <td>{{$items->cedula}}</td>
                                            <td>{{$items->telefono}}</td>
                                            <td>{{$items->oficio}}</td>

                                            <td>{{$items->correo}}</td>
                                            <td class="text-center">



                                                <button onclick="nomina({{( $items->id)}});" data-toggle="tooltip"
                                                    data-placement="top" title="Pagar nomina"> <i
                                                        class="fas fa-file-invoice-dollar mr-2"
                                                        style="font-size: 20px; color: green;"></i></button>

                                                <a href="{{ route('personal.edit', $items->user_id) }}" data-toggle="tooltip"
                                                    data-placement="top" title="Editar personal"> <i class="fas fa-edit"
                                                        style="font-size: 20px; color: #4272d7;"></i></a>


                                                <button onclick="destroy({{( $items->id)}});" data-toggle="tooltip"
                                                    data-placement="top" title="Eliminar personal"> <i
                                                        class="fa fa-trash ml-2 mr-2"
                                                        style="font-size: 20px"></i></button>

                                                {!! Form::open(['route' =>
                                                ['personal.destroy',
                                                $items->id], 'method' => 'DELETE', 'id' =>
                                                'confirm-delete']) !!}

                                                {!! Form::close() !!}

                                            </td>
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<!-- END PAGE CONTAINER-->
</div>
</div>
</div>
</div>
@endsection



<style>
    .fa-trash {
        color: red;
    }

</style>


@section('script')


<script>
    function destroy(personal_id) {
        Swal.fire({
            title: "¡Cuidado!",
            text: "¿Estás seguro que deseas eliminar este personal?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Aceptar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.value) {

                $('#confirm-delete').submit();


            }
        })
    }


   




    function nomina(personal_id) {

        $.ajax({
            "_token": "{{ csrf_token() }}",

            url: "{{ route('personal.getinfo') }}",
            data: {

                "personal_id": personal_id
            },

            dataType: 'html',
            type: 'get',

            success: function (response) {

                console.log(response);


                var obj = JSON.parse(response);
                $('#nombre').val(obj[0].nombre);
                $('#apellido').val(obj[0].apellido);
                $('#cedula').val(obj[0].cedula);
                $('#id').val(obj[0].id);
                $('#oficio').val(obj[0].oficio);

                $("#Productos").empty();


                $("#AjaxM").modal("show");



            }
        })
    }

</script>


@endsection
</script>



<div class="modal fade" id="AjaxM" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="text-center">
                    <h5 class="modal-title text-center" id="exampleModalLongTitle"></h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <h4>Pago de nomina</h4>
                    <p>Por favor verifique la información auto-completada e ingrese las horas trabajadas y el total a
                        pagar</p>
                    <p>Los campos que contengan (<span style="color:red">*</span>) son
                        obligatorios</p>
                </div>




                <form action="{{ route('nominas.store') }}" method="POST" class="form-horizontal">
                    {{csrf_field()}}

                    <div class="form-group">
                        <div class="mt-3 col-sm-12">
                            <strong style="color:black">Nombre</strong><span style="color:red">*</span>
                            <input type="hidden" id="id" name="personal_id" class="form-control"
                                style="text-align:left;">



                            <input type="text" id="nombre" class="form-control" style="text-align:left;" disabled>
                        </div>


                        <div class="mt-3 col-sm-12">
                            <strong style="color:black">Apellido</strong><span style="color:red">*</span>



                            <input type="text" id="apellido" class="form-control" style="text-align:left;" disabled>
                        </div>


                        <div class="mt-3 col-sm-12">
                            <strong style="color:black">Cedula</strong><span style="color:red">*</span>



                            <input type="text" id="cedula" class="form-control" style="text-align:left;" disabled>
                        </div>

                        <div class="mt-3 col-sm-12">
                            <strong style="color:black">Oficio</strong><span style="color:red">*</span>



                            <input type="text" id="oficio" class="form-control" style="text-align:left;" disabled>
                        </div>



                        <div class="mt-3 col-sm-12">
                            <strong style="color:black">Horas trabajadas</strong><span style="color:red">*</span>
                            <input type="text" class="form-control" name="horas" style="text-align:left;"
                                placeholder="Horas">
                        </div>

                        <div class="mt-3 col-sm-12">
                            <strong style="color:black">BsS por hora</strong><span style="color:red">*</span>
                            <input type="text" class="form-control" name="cantidad" style="text-align:left;"
                                placeholder="Bolivares soberanos por cada hora trabajada">
                        </div>
                    </div>
                    <center>
                        <button type="submit" class="btn btn-success  mt-3">Guardar</button>

                        <button type="button" class="btn btn-danger mt-3" data-dismiss="modal">Cerrar</button>
                    </center>
                </form>





                <div id="Productos">

                </div>




                <div class="text-center mt-3 mb-3">
                    <!-- 
<button onclick="products();" value="click">
<i class="fa fa-plus" style="font-size: 35px;"> 
</i>
</button> -->

                </div>

            </div>
            <div class="modal-footer">


            </div>
        </div>
    </div>
</div>





<style>
    .modal-header {
        background-color: #4272d7;
    }

</style>
