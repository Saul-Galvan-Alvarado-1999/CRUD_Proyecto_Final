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
        
<th>Nombre</th>
<th>Apellido Paterno</th>
<th>Apellido Materno</th>
<th>Código del Vendedor</th>
<th>Opciones</th>
        </tr>

        </thead>
        <tbody>
        @foreach($vendedores as $vendedor)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $vendedor->Nombre}}</td>
        <td>{{ $vendedor->Apellido_Paterno}}</td>
        <td>{{ $vendedor->Apellido_materno}}</td>
        <td>{{ $vendedor->vendedor_codigo}}</td>
        <td>
        <a class="btn btn-info"  href="{{ url('/vendedores/'.$vendedor->id.'/edit')}}">
        Modificar 
        </a>
        
        <form method="post" action="{{ url('/vendedores/'.$vendedor->id) }}">
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
        <a href="{{ url('vendedores/create')  }}" class="btn btn-success">Agregar Vendedor</a>
        </div>
</br></br>
        </div>
     @endsection