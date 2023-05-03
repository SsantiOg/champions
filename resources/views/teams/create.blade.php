@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('teams.store')}}" method="POST">
            @csrf

            <div class="mb-3 mt-3">
            <label for="text" class="form-label">Local: </label>
            <input type="text" class="form-control" id="email" placeholder="Ingrese un nuevo equipo" name="local_team">
            </div>

            <div class="mb-3 mt-3">
                <label for="text" class="form-label">Visitante: </label>
                <input type="text" class="form-control" id="email" placeholder="Ingrese un nuevo equipo" name="visit_team">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection