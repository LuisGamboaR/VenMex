@extends ("partials.admin.layout")

@section("content")

<div class="page-content ">
    <div class="page-header">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Utileria</h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-12 ">
                <div class="w3-show-inline-block mt-4 float-right col-12">
                </div>
                <div class="block margin-bottom-sm">

                    <center>
                        <div class="title text-center"><strong>Registro de utilerias</strong></div>
                    </center>

                    <center>
                        <p>Los campos que contengan (<span style="color:red">*</span>) son
                            obligatorios</p>
                    </center>

                    <div class="card-body">
                        {!! Form::open(['route' => 'utilerias.store', 'id' => 'formulario_registro_utilerias']) !!}

                        @include('utilerias.partials.form')

                        {!! Form::close() !!}

                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</div>

@endsection