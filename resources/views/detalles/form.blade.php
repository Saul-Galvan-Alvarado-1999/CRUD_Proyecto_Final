<div class="form-group">


        <div class="form-group">
<label class="control.label" for="Pedido_codigo">Código del Pedido:</label>
    <input class="form-control {{$errors->has('Pedido_codigo')?'is-invalid':'' }} " type="text" name="Pedido_codigo" id="Pedido_codigo" 
    value="{{ isset($detalle->Pedido_codigo)?$detalle->Pedido_codigo:old('Pedido_codigo') }}">

    {!! $errors->first('Pedido_codigo','<div class="invalid-feedback">:message</div>') !!}

    
    </div>
</br>

    <div class="form-group">
    <label class="control.label" for="Producto_codigo">Código del Producto:</label>
    <input class="form-control {{$errors->has('Producto_codigo')?'is-invalid':'' }} " type="text" name="Producto_codigo" id="Producto_codigo" 
    value="{{ isset($detalle->Producto_codigo)?$detalle->Producto_codigo:old('Producto_codigo') }}">
    {!! $errors->first('Producto_codigo','<div class="invalid-feedback">:message</div>') !!}
    </div>
</br>
 
    <input type="submit" class="btn btn-secondary"  value="{{ $Modo=='crear' ? 'Agregar':'Modificar'}}" >
    
    <a class="btn btn-danger" href="{{ url('detalles')  }}">Volver</a>
    </div>