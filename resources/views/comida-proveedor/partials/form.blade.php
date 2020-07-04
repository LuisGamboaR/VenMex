
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
<center>
<div class="row col-md-4">

    <div class="col mt-3">
        <label class="alinear">Proveedor<span style="color:red">*</span></label>
        <select name="proveedor_id" id="" class="form-control ">
        @foreach($proveedor as $item)
        <option class="text-center" value="{{$item->user_id}}">
        {{$item->nombre}}
        </option>
        </select>
        @endforeach
    </div>
</div>
</center>
<div class="row">


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

<div class="add ">

</div>



<div class="w3-show-inline-block mt-5 text-center">
    <div class="w3-bar">
        <button type="submit" class="btn btn-primary">Registrar</button>
        
    </div>
</div>
</form>



