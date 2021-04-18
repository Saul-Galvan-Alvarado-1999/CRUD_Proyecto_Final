<div class="form-group">


        <div class="form-group">
<label class="control.label" for="Nombre">Nombre:</label>
    <input class="form-control {{$errors->has('Nombre')?'is-invalid':'' }} " type="text" name="Nombre" id="Nombre" 
    value="{{ isset($vendedor->Nombre)?$vendedor->Nombre:old('Nombre') }}">

    {!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>') !!}

    
    </div>
</br>

    <div class="form-group">
    <label class="control.label" for="Apellido_Paterno">Apellido Paterno:</label>
    <input class="form-control {{$errors->has('Apellido_Paterno')?'is-invalid':'' }} " type="text" name="Apellido_Paterno" id="Apellido_Paterno" 
    value="{{ isset($vendedor->Apellido_Paterno)?$vendedor->Apellido_Paterno:old('Apellido_Paterno') }}">
    {!! $errors->first('Apellido_Paterno','<div class="invalid-feedback">:message</div>') !!}
    </div>
</br>

    <div class="form-group">
    <label class="control.label" for="Apellido_materno">Apellido Materno:</label>
    <input class="form-control {{$errors->has('Apellido_materno')?'is-invalid':'' }} " type="text" name="Apellido_materno" id="Apellido_materno" 
    value="{{ isset($vendedor->Apellido_materno)?$vendedor->Apellido_materno:old('Apellido_materno') }}">
    {!! $errors->first('Apellido_materno','<div class="invalid-feedback">:message</div>') !!}
    </div>
</br>
    
    <div class="form-group">
    <label class="control.label" for="vendedor_codigo">Código del Vendedor:</label>
    <input class="form-control {{$errors->has('Producto_codigo')?'is-invalid':'' }} " type="text" name="vendedor_codigo" id="vendedor_codigo" 
    value="{{ isset($vendedor->vendedor_codigo)?$vendedor->vendedor_codigo:old('vendedor_codigo') }}">
    {!! $errors->first('vendedor_codigo','<div class="invalid-feedback">:message</div>') !!}
    </div>
</br>
 
    <input type="submit" class="btn btn-secondary"  value="{{ $Modo=='crear' ? 'Agregar':'Modificar'}}" >
    
    <a class="btn btn-danger" href="{{ url('vendedores')  }}">Volver</a>
    </div>