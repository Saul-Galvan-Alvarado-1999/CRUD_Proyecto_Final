@extends('layouts.app')

@section('content')

<div class="container">
<form method="POST" action="{{ url('/vendedores/' .$vendedor->id) }}" class="form-horizontal">
{{csrf_field()}}
{{ method_field('PATCH') }}
@include('vendedores.form', ['Modo'=>'editar'])

</form>

 </div>
     @endsection