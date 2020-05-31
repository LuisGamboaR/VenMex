
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
        {{ Form::text('name', null, ['class' => "form-control $errors->has('name') ? ' is-invalid' : ''", 'id' => 'name', 'maxlength' => 30, 'placeholder' => 'Introduzca el nombre del proveedor']) }}

    </div>
    <div class="col mt-3">
        <label class="alinear">Rif<span style="color:red">*</span></label>
        {{ Form::text('rif', null, ['class' => "form-control $errors->has('rif') ? ' is-invalid' : ''", 'id' => 'rif', 'maxlength' => 15, 'placeholder' => 'Introduzca el RIF del proveedor']) }}

    </div>
</div>
<div class="row">

<div class="col mt-3">
        <label class="alinear">Teléfono<span style="color:red">*</span></label>
        {{ Form::text('telefono', null, ['class' => "form-control $errors->has('telefono') ? ' is-invalid' : ''", 'id' => 'telefono', 'maxlength' => 11, 'placeholder' => 'Introduzca un número de telefono']) }}
    </div>
  
<div class="col mt-3">
        <label class="alinear">Dirección<span style="color:red">*</span></label>
        {{ Form::text('address', null, ['class' => "form-control $errors->has('address') ? ' is-invalid' : ''", 'id' => 'address', 'maxlength' => 40, 'placeholder' => 'Introduzca una breve direccion']) }}
    </div>
</div>

<div class="row">

<div class="col mt-3">
        <label class="alinear">Correo<span style="color:red">*</span></label>
        {{ Form::email('email', null, ['class' => "form-control $errors->has('email') ? ' is-invalid' : ''", 'id' => 'email', 'maxlength' => 40, 'placeholder' => 'Introduzca un correo']) }}
    </div>
</div>


<div class="w3-show-inline-block mt-5 text-center">
    <div class="w3-bar">
        <button type="submit" class="btn btn-primary">Registrar</button>
        
    </div>
</div>
</form>



