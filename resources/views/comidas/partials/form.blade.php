
@if(count($errors))
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endif
<center>
    <h4 class="box-title mb-2">Datos</h4>
</center>
<div class="row">

    <div class="col mt-3">
        <label class="alinear">Nombre<span style="color:red">*</span></label>
        {{ Form::text('nombre', null, ['class' => "form-control $errors->has('nombre') ? ' is-invalid' : ''", 'id' => 'nombre', 'maxlength' => 30, 'placeholder' => 'Por favor introduzca el nombre del alimento.']) }}
    </div>
    <div class="col mt-3">
        <label class="alinear">Medida<span style="color:red">*</span></label>
        <select class="form-control" id="medida" name="medida">
            <option value="">Selecciona una opción</option>
            <option value="KG">KG</option>
            <option value="UNITARIO">UNITARIO</option>
        </select>
    </div>
</div>

<div class="row">
      <div class="col mt-3">
          <label class="alinear">Cantidad<span style="color:red">*</span></label>
          
              {{ Form::text('cantidad', null, ['class' => "form-control $errors->has('cantidad') ? ' is-invalid' : ''", 'id' => 'cantidad', 'maxlength' => 9999999999, 'placeholder' => 'Por favor introduzca el stock del alimento.']) }}
      </div>
      <div class="col mt-3">
          <label class="alinear">Precio<span style="color:red">*</span></label>
          {{ Form::text('precio', null, ['class' => "form-control $errors->has('precio') ? ' is-invalid' : ''", 'id' => 'precio', 'maxlength' => 999999999, 'placeholder' => 'Por favor introduzca el precio del alimento dependiendo de la medida del mismo.']) }}
          
      </div>
  </div>
  <div class="row">
      <div class="col mt-3">
          <label class="alinear">Stock minimo<span style="color:red">*</span></label>
          
              {{ Form::text('stock_min', null, ['class' => "form-control $errors->has('stock_min') ? ' is-invalid' : ''", 'id' => 'stock_min', 'maxlength' => 9999999999, 'placeholder' => 'Por favor introduzca el stock minimo para las alertas.']) }}
      </div>
      <div class="col mt-3">
          <label class="alinear">Stock maximo<span style="color:red">*</span></label>
          {{ Form::text('stock_max', null, ['class' => "form-control $errors->has('stock_max') ? ' is-invalid' : ''", 'id' => 'stock_max', 'maxlength' => 9999999999, 'placeholder' => 'Por favor introduzca el stock maximo para las alertas.']) }}
          
      </div>
  </div>





<div class="w3-show-inline-block mt-5 text-center">
    <div class="w3-bar">
        <button type="submit" class="btn btn-primary">Registrar</button>
        
    </div>
</div>
</form>



