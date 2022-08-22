@extends('layouts.app')

@section('content')    
    <h1>Task List</h1>

    @foreach($tasks as $task)
        <div class="card @if($task->isCompleted()) text-decoration-line-through border-success @endif" style="margin-bottom: 20px;">
            <div class="card-body">
                <p>
                    {{ $task->description}}
                </p>

                @if(!$task->isCompleted())
                <form action="/tasks/{{ $task->id }}" method="POST">
                @method('PATCH')
                @csrf
                    <button class="btn btn-light" input="submit">Complete</button>
                </form>
                @else
                <form action="/tasks/{{ $task->id }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" input="submit"><i class="bi bi-trash3"></i>Delete</button>
                </form>
                @endif
            </div>
        </div>
    @endforeach
    <div class="d-grid gap-2 col-6 mx-auto">
        <a href="/tasks/create" class="btn btn-primary">New Task</a>
    </div>
@endsection