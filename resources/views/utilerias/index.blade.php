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
                            <h4>Listado de utilerias</h4>
                        </center>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            <div class="float-right mb-2">

                                <a href="{{ route('utilerias.create') }}" class="btn btn-primary">Registrar utileria</a>

                            </div>
                            <a href="{{ route('utilerias.pdf') }}" target="_blank" class="btn btn-primary mb-2 mt-2"
                                                data-toggle="tooltip" data-placement="left"
                                                title="Generar pdf"> <i class="feather icon-file-text"
                                                    style="font-size: 20px; "></i> Generar PDF</a>
                            <div class="dt-responsive table-responsive">
                                <table id="simpletable" class="table table-striped  nowrap text-center">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Cantidad</th>
                                            <th>Cantidad en uso</th>
                                            <th>Precio</th>
                                            <th>Descripción</th>
                                            <th>Opciones</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($utilerias as $item)
                                        <tr>
                                            <td>{{$item->nombre}}</td>
                                            <td>{{$item->cantidad}}</td>
                                            <td>{{$item->cantidad_en_uso}}</td>
                                            <td>{{$item->precio}}</td>
                                            <td>{{$item->descripcion}}</td>
                                            <td class="text-center">





                                                <a href="{{ route('utilerias.edit', $item->id) }}" data-toggle="tooltip"
                                                    data-placement="top" title="Editar utileria"> <i class="fas fa-edit"
                                                        style="font-size: 20px; color: #4272d7;"></i></a>


                                                <button onclick="destroy({{( $item->id)}});" data-toggle="tooltip"
                                                    data-placement="top" title="Eliminar utileria"> <i
                                                        class="fa fa-trash ml-2 mr-2"
                                                        style="font-size: 20px"></i></button>

                                                {!! Form::open(['route' =>
                                                ['utilerias.destroy',
                                                $item->id], 'method' => 'DELETE', 'id' =>
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
            text: "¿Estás seguro que deseas eliminar esta utileria?",
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

</script>


@endsection
