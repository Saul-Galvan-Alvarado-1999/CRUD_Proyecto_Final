@extends('layouts.app')

@section('content')

<div class="container">
<form method="POST" action="{{ url('/pedidos/' .$pedido->id) }}" class="form-horizontal">
{{csrf_field()}}
{{ method_field('PATCH') }}
@include('pedidos.form', ['Modo'=>'editar'])

</form>

 </div>
     @endsection