@extends('layouts.app')

@section('content')

<div class="container">
    <a name="" id="" class="btn btn-primary" href="{{route('teams.create')}}" role="button">Crear Equipo</a>
    <div class="table-responsive">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Local</th>
                    <th scope="col">Visitante</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $team)
                
                    <tr class="">
                        <td scope="row">{{$team->id}}</td>
                        <td>{{$team->local_team}}</td>
                        <td>{{$team->visit_team}}</td>
                        <td><div class="btn-group" role="group" aria-label="Button group name">
                           <a href="{{route('teams.show', $team->id)}}"> <button type="button" class="btn btn-success">Detalles</button></a>
                           
                           <form action="{{route('teams.destroy', $team->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                           <button type="submit" class="btn btn-danger">Eliminar</button>
                           </form>

                        </div>
                        </td>
                    </tr>  
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

