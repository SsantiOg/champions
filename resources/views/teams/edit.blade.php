@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('teams.update', $team->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3 mt-3">
            <label for="text" class="form-label">Estado:</label>
            <input type="text" class="form-control" id="email" placeholder="Ingrese un nuevo equipo" name="name" value="{{$team->team}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection