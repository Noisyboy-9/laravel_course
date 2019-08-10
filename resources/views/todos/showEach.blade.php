@extends('layout')

@section('content')
    <h1 class="mb-4">{{$todo->title}}</h1>

    <p>{{$todo->description}}</p>

    <form action="{{route('todos.update', $todo->id)}}" class="d-flex mb-3 align-items-center" method="POST">
        @csrf
        @method('patch')
        <label for="status" class="form-check-label">Complete</label>
        <input id="status" type="checkbox" name="completed" class="form-check-inline ml-2" onchange="this.form.submit()">
    </form>

    <form action="{{route('todos.delete', $todo->id)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger">Delete Task</button>
    </form>

    <hr>
    <a href="{{route('todos.showAll')}}">Back</a>
@endsection

