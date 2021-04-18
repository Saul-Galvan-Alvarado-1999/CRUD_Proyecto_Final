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
<th>Código del Pedido</th>
<th>Código del Producto</th>
<th>Opciones</th>
        </tr>

        </thead>
        <tbody>
        @foreach($detalles as $detalle)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $detalle->Pedido_codigo}}</td>
        <td>{{ $detalle->Producto_codigo}}</td>
        <td>
        <a class="btn btn-info"  href="{{ url('/detalles/'.$detalle->id.'/edit')}}">
        Modificar 
        </a>
        
        <form method="post" action="{{ url('/detalles/'.$detalle->id) }}">
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
        <a href="{{ url('detalles/create')  }}" class="btn btn-success">Agregar Detalle</a>
        </div>
</br></br>
        </div>
     @endsection