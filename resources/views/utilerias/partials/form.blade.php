
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
        {{ Form::text('nombre', null, ['class' => "form-control $errors->has('nombre') ? ' is-invalid' : ''", 'id' => 'nombre', 'maxlength' => 25, 'placeholder' => 'Introduzca el nombre de la utileria']) }}
    </div>
    <div class="col mt-3">
        <label class="alinear">Cantidad<span style="color:red">*</span></label>
        {{ Form::text('cantidad', null, ['class' => "form-control $errors->has('cantidad') ? ' is-invalid' : ''", 'id' => 'cantidad', 'maxlength' => 9999999999, 'placeholder' => 'Introduzca la cantidad de stock de la utileria']) }}
    </div>
</div>
<div class="row">
  
<div class="col mt-3">
        <label class="alinear">Precio <span style="color:red">*</span></label>
        {{ Form::text('precio', null, ['class' => "form-control $errors->has('precio') ? ' is-invalid' : ''", 'id' => 'precio', 'maxlength' => 9999999999, 'placeholder' => 'Introduzca el precio unitario de la utileria']) }}
    </div>
    <div class="col mt-3">
        <label class="alinear">Descripción<span style="color:red">*</span></label>
        {{ Form::text('descripcion', null, ['class' => "form-control $errors->has('descripcion') ? ' is-invalid' : ''", 'id' => 'descripcion', 'maxlength' => 25, 'placeholder' => 'Introduzca una breve descripción']) }}
    </div>
</div>

<div class="row">
  
<div class="col mt-3">
        <label class="alinear">Descripción<span style="color:red">*</span></label>
        {{ Form::text('descripcion', null, ['class' => "form-control $errors->has('descripcion') ? ' is-invalid' : ''", 'id' => 'descripcion', 'maxlength' => 25, 'placeholder' => 'Introduzca una breve descripción']) }}
    </div>
</div>






<div class="w3-show-inline-block mt-5 text-center">
    <div class="w3-bar">
        <button type="submit" class="btn btn-primary">Registrar</button>
        
    </div>
</div>
</form>



