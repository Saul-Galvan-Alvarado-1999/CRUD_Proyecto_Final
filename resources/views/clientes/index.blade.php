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
<th>Código del Cliente</th>
<th>Opciones</th>
        </tr>

        </thead>
        <tbody>
        @foreach($clientes as $cliente)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ $cliente->Nombre}}</td>
        <td>{{ $cliente->Apellido_Paterno}}</td>
        <td>{{ $cliente->Apellido_materno}}</td>
        <td>{{ $cliente->cliente_codigo}}</td>
        <td>
        <a class="btn btn-info"  href="{{ url('/clientes/'.$cliente->id.'/edit')}}">
        Modificar 
        </a>
        
        <form method="post" action="{{ url('/clientes/'.$cliente->id) }}">
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
        <a href="{{ url('clientes/create')  }}" class="btn btn-success">Agregar Cliente</a>
        </div>
</br></br>
        </div>
     @endsection