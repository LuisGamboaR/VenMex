@extends ("partials.admin.layout")
@section("content")




<!-- MAIN CONTENT-->
<div class="main-content">
				<div class="section__content section__content--p30">
					
						<div class="row">
							<div class="col-sm-12">
								<div class="card">
									<div class="card-header">
										<center><h4 class="box-title">Registrar orden de compra</h4>
										<p>Los campos que contengan (<span style="color:red">*</span>) son
                                                obligatorios</p>
										</center>
									</div>
									<center>
									<div class="w3-show-inline-block mt-4 float-right col-12">

									<button onclick="add();"  class="btn btn-primary">Añadir alimentos</button>
                                    <button onclick="cerrar();"  class="btn btn-primary">Quitar alimentos</button>	
									</div>
									</center>
																	<div class="card-body">
                                    <div class="card-block">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card-body">
                                            {!! Form::open(['route' => 'comida-proveedor.store', 'id' => 'formulario_registro_comida-proveedor']) !!}

@include('comida-proveedor.partials.form')

{!! Form::close() !!}

                                            </div>
                                        </div>
                                    </div> <!-- /.row -->
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


<script>

function add() {

var add = `
<div class="row parent">
<div class="col mt-3">
        <label class="alinear">Alimento<span style="color:red">*</span></label>
        <select name="alimento_id[]" id="" class="form-control ">
        @foreach($comida as $item)
        <option class="text-center" value="{{$item->id}}">
        {{$item->nombre}}
        </option>
		@endforeach
        </select>
      
    </div>
  
<div class="col mt-3">
        <label class="alinear">Cantidad<span style="color:red">*</span></label>
        {{ Form::text('cantidad[]', null, ['class' => "form-control $errors->has('cantidad') ? ' is-invalid' : ''", 'id' => 'cantidad', 'maxlength' => 40, 'placeholder' => 'Introduzca la cantidad de alimento a ordenar']) }}
    </div>
	</div>
`;

$(".add").append(add);
}




function cerrar(){
    $( ".parent" ).remove();
      }
 
</script>

