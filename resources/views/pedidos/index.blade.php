@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje'))
    
    <div class="alert-info" role="alert">
    {{Session::get('Mensaje')
}}
</div>
@endif

<br>

    <table class="table table-dark table-hover">
        <thead class="thead-dark">
        <tr> 
        <th>Número</th>
<th>Fecha del Pedido</th>
<th>Estado del Pedido</th>
<th>Código del Cliente</th>
<th>Código del Vendedor</th>
<th>Opciones</th>
        </tr>

        </thead>
        <tbody>
        @foreach($pedidos as $pedido)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $pedido->Fecha_pedido}}</td>
        <td>{{ $pedido->Estado_pedido}}</td>
        <td>{{ $pedido->cliente_codigo}}</td>
        <td>{{ $pedido->vendedor_codigo}}</td>
        <td>
        <a class="btn btn-info"  href="{{ url('/pedidos/'.$pedido->id.'/edit')}}">
        Modificar 
        </a>
        
        <form method="post" action="{{ url('/pedidos/'.$pedido->id) }}">
        {{csrf_field() }}
        {{ method_field('Delete') }}
        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Decea eliminar datos?');">Eliminar</button>
        </form>

        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
        </br>
        <div class="col text-center">
        <a href="{{ url('pedidos/create')  }}" class="btn btn-success">Agregar Pedido</a>
</div>
</br></br>
        </div>
     @endsection