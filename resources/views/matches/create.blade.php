@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('matches.store')}}" method="POST">
            @csrf
            <div class="mb-3 mt-3">
            <label for="text" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="text" placeholder="Ingrese un nuevo partido" name="name">
            </div>

            <div class="mb-3 mt-3">
            <label for="text" class="form-label">Fecha:</label>
            <input type="date" class="form-control" id="text" placeholder="Ingrese un nuevo estado" name="date">
            </div>

            <div class="mb-3 mt-3">
            <div class="mb-3">
                <label for="" class="form-label">Estado</label>
                <select class="form-select form-select-lg" name="id_estados" id="">
                    <option value="null" selected>Select one</option>
                    @foreach($estados as $estado)
                    <option value="{{$estado->id}}">{{$estado->estado}}</option>
                    @endforeach
                </select>
                
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Equipo Local</label>
                <select class="form-select form-select-lg" name="id_teams" id="">
                    <option value="null" selected>Select one</option>
                    @foreach($teams as $team)
                    <option value="{{$team->id}}">{{$team->name}}</option>
                    @endforeach
                </select>
                
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Equipo Visitante</label>
                <select class="form-select form-select-lg" name="id_teams" id="">
                    <option value="null" selected>Select one</option>
                    @foreach($teams as $team)
                    <option value="{{$team->id}}">{{$team->name}}</option>
                    @endforeach
                </select>
                
            </div>
            </div>
            

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection