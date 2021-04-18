@extends('layouts.app')

@section('content')

<div class="container">
<form method="POST" action="{{ url('/clientes/' .$cliente->id) }}" class="form-horizontal">
{{csrf_field()}}
{{ method_field('PATCH') }}
@include('clientes.form', ['Modo'=>'editar'])

</form>

 </div>
     @endsection