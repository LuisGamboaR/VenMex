
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
          <label class="alinear">Nombres<span style="color:red">*</span></label>
          
              {{ Form::text('name', null, ['class' => "form-control $errors->has('name') ? ' is-invalid' : ''", 'id' => 'name', 'maxlength' => 25, 'placeholder' => 'Por favor introduzca el nombre del personal.']) }}
      </div>
      <div class="col mt-3">
          <label class="alinear">Apellidos<span style="color:red">*</span></label>
          {{ Form::text('lastname', null, ['class' => "form-control $errors->has('lastname') ? ' is-invalid' : ''", 'id' => 'lastname', 'maxlength' => 30, 'placeholder' => 'Por favor introduzca el apellido del personal.']) }}
          
      </div>
  </div>

<div class="row">
<div class="col mt-3">
<label class="alinear">Tipo de cédula<span style="color:red">*</span></label>

<select name="tipo_c" id="" class="form-control">
<option value="">Selecciona una opción</option>
<option value="V">V</option>
<option value="E">E</option>

</select>
    </div>
      <div class="col mt-3">
          <label class="alinear">Número de cédula<span style="color:red">*</span></label>
          
              {{ Form::text('identification', null, ['class' => "form-control $errors->has('identification') ? ' is-invalid' : ''", 'id' => 'identification', 'maxlength' => 8, 'placeholder' => 'Por favor introduzca el número de cédula del personal.']) }}
      </div>
     
  </div>

<div class="row">


    <div class="col mt-3">
          <label class="alinear">Correo<span style="color:red">*</span></label>
          {{ Form::email('email', null, ['class' => "form-control $errors->has('email') ? ' is-invalid' : ''", 'id' => 'email', 'maxlength' => 40, 'placeholder' => 'Introduzca una dirección de correo.']) }}
          
      </div>

    <div class="col mt-3">
        <label class="alinear">Oficio<span style="color:red">*</span></label>
        <select class="form-control" id="oficio" name="oficio">
            <option value="">Selecciona una opción</option>
            <option value="MESONERO">Mesonero</option>
            <option value="COCINERO">Cocinero</option>
            <option value="OBRERO">Obrero</option>
            <option value="ASEO">Aseo</option>
            <option value="DECORADOR">Decorador</option>

        </select>
    </div>
</div>
<div class="row">
<div class="col mt-3">
<label class="alinear">Codigo<span style="color:red">*</span></label>

<select name="codigo_t" id="" class="form-control">
<option value="">Selecciona una opción</option>
<option value="0426">0426</option>
<option value="0416">0416</option>
<option value="0412">0412</option>
<option value="0424">0424</option>

</select>
    </div>
<div class="col mt-3">
        <label class="alinear">Teléfono<span style="color:red">*</span></label>
        {{ Form::text('telefono', null, ['class' => "form-control $errors->has('telefono') ? ' is-invalid' : ''", 'id' => 'telefono', 'maxlength' => 7, 'placeholder' => 'Introduzca un número de telefono.']) }}

    </div>
</div>


<div class="w3-show-inline-block mt-5 text-center">
    <div class="w3-bar">
        <button type="submit" class="btn btn-primary">Registrar</button>
        
    </div>
</div>
</form>



