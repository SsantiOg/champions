@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('estados.store')}}" method="POST">
            @csrf
            <div class="mb-3 mt-3">
            <label for="text" class="form-label">Estado:</label>
            <input type="text" class="form-control" id="email" placeholder="Ingrese un nuevo estado" name="estado">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection