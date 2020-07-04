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
                            <h4>Listado de clientes</h4>
                        </center>
                    </div>
                    <div class="card-body">
                        <div class="card-block">
                            <div class="float-right mb-2">
                               
                                <a href="{{ route('clientes.create') }}" class="btn btn-primary">Registrar cliente</a>
                              
                            </div>

                            <div class="dt-responsive table-responsive">

                                <table id="simpletable" class="table table-striped table-bordered nowrap text-center">
                                     <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Cédula</th>
                                            <th>Telefono</th>
                                            <th>Correo</th>
                                            <th>Opciones</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>Jose</td>
                                                <td>Luis</td>
                                                <td>3401408</td>
                                                <td>0416234234</td>
                                                <td>verdurasv@gmail.com</td>


                                                <td class="text-center">


                                                  
                                                    <a href="" data-toggle="tooltip" data-placement="top"
                                                        title="Editar producto"> <i class="fas fa-edit mr-2"
                                                            style="font-size: 20px"></i></a>
                                              
                                               

                                                    <button onclick="" data-toggle="tooltip" data-placement="top"
                                                        title="Eliminar producto"> <i class="fas fa-trash mr-2"
                                                            style="font-size: 20px"></i></button>
                                             

                                                </td>
                                            </tr>
                                      
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
