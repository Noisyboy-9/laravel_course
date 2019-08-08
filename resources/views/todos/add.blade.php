@extends('layout')

@section('content')
    <div class="container">
        <h1>Add New Task</h1>

        <hr>

        <form action="/todos/add" method="POST" class="form">
            @csrf
            <div class="form-group">
                <label for="title" class="form__label">Title</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title"
                       placeholder="Task Title" value="{{ old('title') }}">
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description" class="form__label">Description</label>

                <textarea type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="description">{{old('description')}}</textarea>

                @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Add Task</button>
            </div>
        </form>
    </div>
@endsection
