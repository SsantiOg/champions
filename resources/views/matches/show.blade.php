@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tarea: {{$match->name}}</h1>
        <p><b>Fecha:</b> {{$match->date}}</p>
        <p><b>Estado:</b> {{$match->estados->estado}}</p>
        <a name="" id="" class="btn btn-primary" href="{{route('matches.edit', $match->id)}}" role="button">Editar</a>
    </div>
@endsection