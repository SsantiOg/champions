@extends('layouts.app')

@section('content')

<div class="container">
    <a name="" id="" class="btn btn-primary" href="{{route('matches.create')}}" role="button">Crear partido</a>
    <div class="table-responsive">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Estados</th>
                    <th scope="col">Equipo Local</th>
                    <th scope="col">Equipo Visitante</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matches as $match)
                
                    <tr class="">
                        <td scope="row">{{$match->id}}</td>
                        <td>{{$match->name}}</td>
                        <td>{{$match->date}}</td>
                        <td>{{$match->estados->estado}}</td>
                        <td>{{$match->teams->name}}</td>
                        <td>{{$match->teams->name}}</td>
                        <td><div class="btn-group" role="group" aria-label="Button group name">
                           <a href="{{route('matches.show', $match->id)}}"> <button type="button" class="btn btn-success">Detalles</button></a>
                           
                           <form action="{{route('matches.destroy', $match->id)}}" method="POST">
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

