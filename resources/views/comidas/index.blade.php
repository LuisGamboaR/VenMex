@extends ("partials.admin.layout")

@section("content")

<div class="page-content ">
<div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Listado de Comida</h2>
          </div>
        </div>
<div class="container-fluid">
            <div class="row ">
              <div class="col-lg-12 ">
                <div class="block margin-bottom-sm">
                  <div class="title text-center"><strong>  Alimentos</strong></div>
                  <div class="table-responsive"> 
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
                     
                        <tr>
                          <td>Tequeños</td>
                          <td>UNITARIO</td>
                          <td>40</td>
                          <td>20000</td>
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
