@extends('layouts.app')

@section('content')

<div class="container">
<form method="POST" action="{{ url('/productos/' .$detalle->id) }}" class="form-horizontal">
{{csrf_field()}}
{{ method_field('PATCH') }}
@include('productos.form', ['Modo'=>'editar'])

</form>

 </div>
     @endsection