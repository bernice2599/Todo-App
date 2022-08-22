@extends('layouts.app')

@section('content')
<h1>New Task</h1>
    <form method="POST" action="/tasks">
        <div class="form-group" style="margin-bottom: 20px;">
            @csrf
            <label for="description">Task Description:</label>
            <input class="form-control" name="description" placeholder="write...."/>
        </div>
        @error('description')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror
        <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" class="btn btn-primary">Create Task</button>
    </form>
@endsection