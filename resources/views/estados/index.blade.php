@extends('layouts.app')

@section('content')

<div class="container">
    <a name="" id="" class="btn btn-primary" href="{{route('estados.create')}}" role="button">Crear estado</a>
    <div class="table-responsive">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estados as $estado)
                
                    <tr class="">
                        <td scope="row">{{$estado->id}}</td>
                        <td>{{$estado->estado}}</td>
                        <td><div class="btn-group" role="group" aria-label="Button group name">
                           <a href="{{route('estados.show', $estado->id)}}"> <button type="button" class="btn btn-success">Detalles</button></a>
                           
                           <form action="{{route('estados.destroy', $estado->id)}}" method="POST">
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

