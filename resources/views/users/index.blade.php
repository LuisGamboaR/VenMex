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
                            <h4>Listado de usuarios</h4>
                        </center>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            <div class="float-right mb-2">
                                @can('usuarios.create')
                                <a href="{{ route('usuarios.create') }}" class="btn btn-primary">Registrar cliente</a>
                                @endcan
                            </div>

                            <div class="dt-responsive table-responsive">
                            <table id="simpletable" class="table table-striped  nowrap text-center">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Cédula</th>
                          <th>Correo</th>
                          <th>Rol</th>
                          <th>Opciones</th>

                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($users as $item)
                        <tr>
                          <td>{{$item->name}}</td>
                          <td>{{$item->lastname}}</td>
                          <td>{{$item->identification}}</td>
                          <td>{{$item->email}}</td>
                          <td>{{$item->role}}</td>
                          <td class="text-center">

                  

<a href=""
    data-toggle="tooltip" data-placement="top"
    title="Editar usuario"> <i
        class="fa fa-pencil-square-o mr-2"
        style="font-size: 20px"></i></a>

        <a href=""
    data-toggle="tooltip" data-placement="top"
    title="Editar usuario"> <i
        class="fa fa-pencil-square-o mr-2"
        style="font-size: 20px"></i></a>


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








@endsection



