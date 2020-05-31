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
                            <h4>Listado de alimentos</h4>
                        </center>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            <div class="float-right mb-2">

                                <a href="{{ route('comidas.create') }}" class="btn btn-primary">Registrar alimento</a>

                            </div>
                            <a href="{{ route('alimentos.pdf') }}" target="_blank" class="btn btn-primary mb-2 mt-2"
                                                data-toggle="tooltip" data-placement="left"
                                                title="Generar pdf"> <i class="feather icon-file-text"
                                                    style="font-size: 20px; "></i> Generar PDF</a>

                            <div class="dt-responsive table-responsive">
                            <table id="simpletable" class="table table-striped  nowrap text-center">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Medida</th>
                          <th>Cantidad</th>
                          <th>Precio unitario</th>
                          <th>Opciones</th>

                        </tr>
                      </thead>
                      <tbody>
                      @foreach ($comidas as $items)
                                        <tr>
                                            <td>{{$items->nombre}}</td>
                                            <td>{{$items->medida}}</td>
                                            <td>{{$items->precio}}</td>
                                            <td>{{$items->cantidad}}</td>
                                            <td class="text-center">





                                            <a href="{{ route('comidas.edit', $items->id) }}"
                                                                        data-toggle="tooltip" data-placement="top"
                                                                        title="Editar alimento"> <i
                                                                            class="fas fa-edit"
                                                                            style="font-size: 20px; color: #4272d7;"></i></a>
                                              

                                                <button onclick="destroy({{( $items->id)}});" data-toggle="tooltip"
                                                    data-placement="top" title="Eliminar alimento"> <i
                                                        class="fa fa-trash ml-2 mr-2" style="font-size: 20px"></i></button>
                                              
                                                        {!! Form::open(['route' =>
                                                                           ['comidas.destroy',
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
</script>


@endsection




