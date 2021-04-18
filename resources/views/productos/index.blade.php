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
<th>Nombre del Producto</th>
<th>Tipo</th>
<th>Código del Producto</th>
<th>Opciones</th>
        </tr>

        </thead>
        <tbody>
        @foreach($productos as $producto)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $producto->Nombre}}</td>
        <td>{{ $producto->Tipo}}</td>
        <td>{{ $producto->Producto_codigo}}</td>
        <td>
        <a class="btn btn-info"  href="{{ url('/productos/'.$producto->id.'/edit')}}">
        Modificar 
        </a>
        
        <form method="post" action="{{ url('/productos/'.$producto->id) }}">
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
        <a href="{{ url('productos/create')  }}" class="btn btn-success">Agregar Producto</a>
        </div>
</br></br>
        </div>
     @endsection