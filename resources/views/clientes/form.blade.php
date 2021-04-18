<div class="form-group">


        <div class="form-group">
<label class="control.label" for="Nombre">Nombre:</label>
    <input class="form-control {{$errors->has('Nombre')?'is-invalid':'' }} " type="text" name="Nombre" id="Nombre" 
    value="{{ isset($cliente->Nombre)?$cliente->Nombre:old('Nombre') }}">

    {!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>') !!}

    
    </div>
</br>

    <div class="form-group">
    <label class="control.label" for="Apellido_Paterno">Apellido Paterno:</label>
    <input class="form-control {{$errors->has('Apellido_Paterno')?'is-invalid':'' }} " type="text" name="Apellido_Paterno" id="Apellido_Paterno" 
    value="{{ isset($cliente->Apellido_Paterno)?$cliente->Apellido_Paterno:old('Apellido_Paterno') }}">
    {!! $errors->first('Apellido_Paterno','<div class="invalid-feedback">:message</div>') !!}
    </div>
</br>

    <div class="form-group">
    <label class="control.label" for="Apellido_materno">Apellido Materno:</label>
    <input class="form-control {{$errors->has('Apellido_materno')?'is-invalid':'' }} " type="text" name="Apellido_materno" id="Apellido_materno" 
    value="{{ isset($cliente->Apellido_materno)?$cliente->Apellido_materno:old('Apellido_materno') }}">
    {!! $errors->first('Apellido_materno','<div class="invalid-feedback">:message</div>') !!}
    </div>
</br>

<div class="form-group">
    <label class="control.label" for="cliente_codigo">Código del cliente:</label>
    <input class="form-control {{$errors->has('cliente_codigo')?'is-invalid':'' }} " type="text" name="cliente_codigo" id="cliente_codigo" 
    value="{{ isset($cliente->cliente_codigo)?$cliente->cliente_codigo:old('cliente_codigo') }}">
    {!! $errors->first('cliente_codigo','<div class="invalid-feedback">:message</div>') !!}
    </div>
</br>
    
 
    <input type="submit" class="btn btn-secondary"  value="{{ $Modo=='crear' ? 'Agregar':'Modificar'}}" >
    
    <a class="btn btn-danger" href="{{ url('clientes')  }}">Volver</a>
    </div>