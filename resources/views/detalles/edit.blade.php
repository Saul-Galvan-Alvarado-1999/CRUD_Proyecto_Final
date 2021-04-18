@extends('layouts.app')

@section('content')

<div class="container">
<form method="POST" action="{{ url('/detalles/' .$detalle->id) }}" class="form-horizontal">
{{csrf_field()}}
{{ method_field('PATCH') }}
@include('detalles.form', ['Modo'=>'editar'])

</form>

 </div>
     @endsection