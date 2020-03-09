
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
      <input type="text"  maxlength="25" class="form-control" name="nombre" placeholder="Por favor introduzca el nombre">
    </div>
    <div class="col mt-3">
        <label class="alinear">Medida<span style="color:red">*</span></label>
        <select class="form-control" id="medida" name="medida">
            <option value="">Selecciona una opción</option>
            <option value="12500">KG</option>
            <option value="12500">UNITARIO</option>
        </select>
    </div>
</div>
<div class="row">

<div class="col mt-3">
        <label class="alinear">Stock<span style="color:red">*</span></label>
      <input type="text" maxlength="99999999" class="form-control" name="stock_actual" placeholder="Por favor introduzca la cantidad de stock actual">
    </div>
  
<div class="col mt-3">
        <label class="alinear">Precio<span style="color:red">*</span></label>
        {{ Form::text('precio', null, ['class' => "form-control $errors->has('precio') ? ' is-invalid' : ''", 'id' => 'precio', 'maxlength' => 9999999999, 'placeholder' => 'Introduzca el precio unitario o por kg']) }}
    </div>
</div>





<div class="w3-show-inline-block mt-5 text-center">
    <div class="w3-bar">
        <button type="submit" class="btn btn-primary">Registrar</button>
        
    </div>
</div>
</form>



