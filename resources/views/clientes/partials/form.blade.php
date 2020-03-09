
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
      <input type="text" maxlength="25" class="form-control" name="nombre" placeholder="Por favor introduzca el nombre">
    </div>
    <div class="col mt-3">
    <label class="alinear">Apellido<span style="color:red">*</span></label>
      <input type="text" maxlength="30" class="form-control" name="apellido" placeholder="Por favor introduzca el apellido">
    </div>
</div>
<div class="row">

    <div class="col mt-3">
        <label class="alinear">Cédula<span style="color:red">*</span></label>
      <input type="text" maxlength="8" class="form-control" name="cedula" placeholder="Por favor introduzca la cédula">
    </div>
  
    <div class="col mt-3">
        <label class="alinear">Dirección<span style="color:red">*</span></label>
        {{ Form::text('direccion', null, ['class' => "form-control $errors->has('direccion') ? ' is-invalid' : ''", 'id' => 'direccion', 'maxlength' => 25, 'placeholder' => 'Introduzca una breve direccion']) }}
    </div>
</div>

<div class="row">
<div class="col mt-3">
        <label class="alinear">Teléfono<span style="color:red">*</span></label>
      <input type="text" maxlength="11" class="form-control" name="telefono" placeholder="Por favor introduzca el número de teléfono">
    </div>

</div>


<div class="w3-show-inline-block mt-5 text-center">
    <div class="w3-bar">
        <button type="submit" class="btn btn-primary">Registrar</button>
        
    </div>
</div>
</form>



