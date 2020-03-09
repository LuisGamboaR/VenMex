@extends ("partials.admin.layout")

@section("content")

<div class="page-content ">
<div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Listado de clientes</h2>
          </div>
        </div>
<div class="container-fluid">
            <div class="row ">
              <div class="col-lg-12 ">
                <div class="block margin-bottom-sm">
                  <div class="title text-center"><strong>  Cliente</strong></div>
                  <div class="table-responsive"> 
                  <table id="simpletable" class="table table-striped  nowrap text-center">
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
              
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>
              </div>
              </div>

@endsection
