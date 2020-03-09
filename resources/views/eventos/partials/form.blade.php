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
        <label class="alinear">Cliente<span style="color:red">*</span></label>
        <select class="form-control" id="cliente" name="cliente">
            <option value="Daniel">Daniel</option>
            <option value="Jose">José</option>

        </select>
    </div>
    <div class="col mt-3">
        <label class="alinear">Salón<span style="color:red">*</span></label>
        <select class="form-control" id="salon" name="salon">
            <option value="11000">Venezuela</option>
            <option value="6000">Las rosas</option>
            <option value="4000">La cañada</option>
        </select>
    </div>
    <div class="col mt-3">
        <label class="alinear">Descripción<span style="color:red">*</span></label>
        {{ Form::text('descripcion', null, ['class' => "form-control $errors->has('descripcion') ? ' is-invalid' : ''", 'id' => 'descripcion', 'maxlength' => 25, 'placeholder' => 'Introduzca una breve descripcion de la razón del gasto']) }}
    </div>
</div>

<center>
    <h4 class="box-title mb-2 mt-3">Personal</h4>
</center>

<div class="row">
    <div class="col mt-3">
        <label class="alinear">Mesonero<span style="color:red">*</span></label>
        <select class="form-control" id="mesonero" name="mesonero">
            <option value="12500">Adrian</option>
            <option value="12500">Nathan</option>

        </select>
    </div>
    <div class="col mt-3">
        <label class="alinear">Cocinero<span style="color:red">*</span></label>
        <select class="form-control" id="cocinero" name="cocinero">
            <option value="30000">Luis</option>
            <option value="25000">Tanaka</option>

        </select>
    </div>
</div>

<div id="personal22">

</div>




<center>
    <h4 class="box-title mb-2 mt-4">Utileria</h4>
</center>

<div class="row">
    <div class="col mt-3">
        <label class="alinear">Utileria<span style="color:red">*</span></label>
        <select class="form-control" id="utileria" name="nombre">
            <option value="1000">Mesas</option>
            <option value="500">Sillas</option>

        </select>
    </div>
    <div class="col mt-3">
        <label class="alinear">Cantidad<span style="color:red">*</span></label>
        {{ Form::text('cantidad[]', null, ['class' => "form-control $errors->has('cantidad[]') ? ' is-invalid' : ''", 'id' => 'cantidad[]', 'maxlength' => 99999999, 'placeholder' => 'Introduzca una cantidad']) }}
    </div>
</div>

<div id="utileria22">

</div>




<div class="w3-show-inline-block mt-5 text-center">
    <div class="w3-bar">
    <button type="button" onclick="prueba();" class="btn btn-secondary">Calcular precio</button>
        <button type="submit" class="btn btn-primary">Registrar</button>
        
    </div>
</div>
</form>
