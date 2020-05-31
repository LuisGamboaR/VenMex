@extends ("partials.admin.layout")

@section("content")

<div class="page-content ">
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Listado de eventos</h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nombre cliente</h5>
                        <p class="lead">Nombre del salón</p>
                        <p> Breve descripción del tipo de evento.</p>
                        <div>
                        <strong>Cantidad de utileria:</strong>  <h3 class="mb-0" style="display:inline;">245</h3>
                        </div>
                        <div class="mt-3">
                        <strong>Numero de personal:</strong>  <h3 class="mb-0" style="display:inline;">245</h3>
                        </div>
                        <div class="mt-3">
                        <strong>Dia y hora del evento</strong>  <h3 class="mb-0" style="display:inline;">245</h3>
                        </div>
                        


                        <div class="w3-show-inline-block mt-4">
                            <div class="w3-bar">
                                <button class="btn btn-outline-info"><span class="fa fa-user"></span> Ver detalles</button>
                                <button type="button" class="btn btn-outline-primary ml-3"><span class="fa fa-gear"></span>
                                    Opciones</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nombre cliente</h5>
                        <p class="lead">Nombre del salón</p>
                        <p> Breve descripción del tipo de evento.</p>
                        <div>
                        <strong>Cantidad de utileria:</strong>  <h3 class="mb-0" style="display:inline;">245</h3>
                        </div>
                        <div class="mt-3">
                        <strong>Numero de personal:</strong>  <h3 class="mb-0" style="display:inline;">245</h3>
                        </div>
                        <div class="mt-3">
                        <strong>Dia y hora del evento</strong>  <h3 class="mb-0" style="display:inline;">245</h3>
                        </div>
                        


                        <div class="w3-show-inline-block mt-4">
                            <div class="w3-bar">
                                <button class="btn btn-outline-info"><span class="fa fa-user"></span> Ver detalles</button>
                                <button type="button" class="btn btn-outline-primary ml-3"><span class="fa fa-gear"></span>
                                    Opciones</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>


@endsection

<style>
    .card {
        max-width: 100%;
        text-align: center;
    }

    .card-group {
        display: flex;
    }

    .column {
        width: 100%;
        display: block;
    }

</style>
