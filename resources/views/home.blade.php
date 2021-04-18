@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:#87CEFA">{{ __('Bienvenido') }}</div>

                <div class="card-body" style="background-color:#DCDCDC">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Esto es un pequeño proyecto elaborado por Saúl Galván Alvarado,
                    con el fin de representar un pequeño sistema que consta de 5 tablas en las cuales 
                    se requiere realizar un CRUD en cada una de ellas, esto con finalidad de entregar 
                    el proyecto final, espero que sea de su agrado...') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
