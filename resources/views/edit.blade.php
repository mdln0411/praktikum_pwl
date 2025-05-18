@extends('layouts.layout')

@section('todolist')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Task</h5>
            <form action="{{ route('todolist.update', $task->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="task" class="form-label">Task</label>
                    <input type="text" name="task" id="task" class="form-control @error('task') is-invalid @enderror" value="{{ old('task', $task->task) }}">
                    @error('task')
                        <div class="invalid-feedback d-block text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="/" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection 