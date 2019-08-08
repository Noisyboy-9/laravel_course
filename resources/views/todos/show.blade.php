@extends('layout')

@section('content')
    <div class="d-flex">
        <div class="flex-grow-1">

            <h2>Uncompleted Tasks</h2>

            <ul>
                @foreach($unCompleteds as $unCompleted)
                    <li class="d-flex align-items-center mt-2">
                        <a href="{{route('todos.showEach',$unCompleted['id'])}}">{{$unCompleted['title']}}</a>

                        <form action="{{route('todos.update', $unCompleted['id'])}}" class="m-0 p-0" method="POST">
                            @csrf
                            @method('patch')
                            <input id="status" type="checkbox" name="completed" class="form-check-inline ml-2" onchange="this.form.submit()">
                        </form>

                        <form action="{{route('todos.delete', $unCompleted['id'])}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete Task</button>
                        </form>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="flex-grow-1">
            <h2>Completed Tasks</h2>

            <ul>
                @foreach($completeds as $completed)
                    <li class="d-flex align-items-center mt-2">
                        <a class="line-through" href="{{route('todos.showEach',$completed['id'])}}">{{$completed['title']}}</a>

                        <form action="{{route('todos.update', $completed['id'])}}" class="p-0 m-0" method="POST">
                            @csrf
                            @method('patch')
                            <input id="status" type="checkbox" name="completed" class="form-check-inline ml-2" onchange="this.form.submit()" checked>
                        </form>

                        <form action="{{route('todos.delete', $completed['id'])}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete Task</button>
                        </form>
                    </li>
                @endforeach
            </ul>

        </div>
    </div>

@endsection
