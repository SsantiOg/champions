@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Estado: {{$estado->estado}}</h1>
        <a name="" id="" class="btn btn-primary" href="{{route('estados.edit', $estado->id)}}" role="button">Editar</a>
    </div>
@endsection