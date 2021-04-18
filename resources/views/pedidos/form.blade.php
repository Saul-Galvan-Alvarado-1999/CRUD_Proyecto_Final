<div class="form-group">


        <div class="form-group">
<label class="control.label" for="Fecha_pedido">Fecha en la que se Realiza el Pedido:</label>
    <input class="form-control {{$errors->has('Fecha_pedido')?'is-invalid':'' }} " type="date" name="Fecha_pedido" id="Fecha_pedido" 
    value="{{ isset($pedido->Fecha_pedido)?$pedido->Fecha_pedido:old('Fecha_pedido') }}">

    {!! $errors->first('Fecha_pedido','<div class="invalid-feedback">:message</div>') !!}

    
    </div>
</br>

    <div class="form-group">
    <label class="control.label" for="Estado_pedido">Estado del Pedido:</label>
    <input class="form-control {{$errors->has('Estado_pedido')?'is-invalid':'' }} " type="text" name="Estado_pedido" id="Estado_pedido" 
    value="{{ isset($pedido->Estado_pedido)?$pedido->Estado_pedido:old('Estado_pedido') }}">
    {!! $errors->first('Estado_pedido','<div class="invalid-feedback">:message</div>') !!}
    </div>
</br>
 
  <div class="form-group">
    <label class="control.label" for="cliente_codigo">Código del Cliente:</label>
    <input class="form-control {{$errors->has('cliente_codigo')?'is-invalid':'' }} " type="text" name="cliente_codigo" id="cliente_codigo" 
    value="{{ isset($pedido->cliente_codigo)?$pedido->cliente_codigo:old('cliente_codigo') }}">
    {!! $errors->first('cliente_codigo','<div class="invalid-feedback">:message</div>') !!}
    </div>
</br>

 <div class="form-group">
    <label class="control.label" for="vendedor_codigo">Código del Vendedor a cargo:</label>
    <input class="form-control {{$errors->has('Producto_codigo')?'is-invalid':'' }} " type="text" name="vendedor_codigo" id="vendedor_codigo" 
    value="{{ isset($pedido->vendedor_codigo)?$pedido->vendedor_codigo:old('vendedor_codigo') }}">
    {!! $errors->first('vendedor_codigo','<div class="invalid-feedback">:message</div>') !!}
    </div>
</br>

    <input type="submit" class="btn btn-secondary"  value="{{ $Modo=='crear' ? 'Agregar':'Modificar'}}" >
    
    <a class="btn btn-danger" href="{{ url('pedidos')  }}">Volver</a>
    </div>