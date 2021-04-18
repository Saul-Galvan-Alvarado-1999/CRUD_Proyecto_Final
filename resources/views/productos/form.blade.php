<div class="form-group">


        <div class="form-group">
<label class="control.label" for="Nombre">Nombre del Producto:</label>
    <input class="form-control {{$errors->has('Nombre')?'is-invalid':'' }} " type="text" name="Nombre" id="Nombre" 
    value="{{ isset($producto->Nombre)?$producto->Nombre:old('Nombre') }}">

    {!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>') !!}

    
    </div>
</br>

    <div class="form-group">
    <label class="control.label" for="Tipo">Tipo:</label>
    <input class="form-control {{$errors->has('Tipo')?'is-invalid':'' }} " type="text" name="Tipo" id="Tipo" 
    value="{{ isset($producto->Tipo)?$producto->Tipo:old('Tipo') }}">
    {!! $errors->first('Tipo','<div class="invalid-feedback">:message</div>') !!}
    </div>
</br>
 
  <div class="form-group">
    <label class="control.label" for="Producto_codigo">Código del Producto:</label>
    <input class="form-control {{$errors->has('Producto_codigo')?'is-invalid':'' }} " type="text" name="Producto_codigo" id="Producto_codigo" 
    value="{{ isset($producto->Producto_codigo)?$producto->Producto_codigo:old('Producto_codigo') }}">
    {!! $errors->first('Producto_codigo','<div class="invalid-feedback">:message</div>') !!}
    </div>
</br>

    <input type="submit" class="btn btn-secondary"  value="{{ $Modo=='crear' ? 'Agregar':'Modificar'}}" >
    
    <a class="btn btn-danger" href="{{ url('productos')  }}">Volver</a>
    </div>