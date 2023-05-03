@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('matchs.update', $match->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3 mt-3">
            <label for="text" class="form-label"><b>Tarea:</b> </label>
            <input type="text" class="form-control" id="text" placeholder="Ingrese un nuevo partido" name="name" value="{{$match->name}}">
            <label for="text" class="form-label"><b>Fecha:</b> </label>
            <input type="date" class="form-control" id="text" placeholder="Ingrese un nuevo partido" name="date" value="{{$match->date}}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Estados</label>
                <select class="form-select form-select-lg" name="id_estados" id="">
                    <option value="{{$match->id_estados}}" selected>{{$match->estados->estado}}</option>
                    @foreach($estados as $estado)
                    <option value="{{$estado->id}}">{{$estado->estado}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection