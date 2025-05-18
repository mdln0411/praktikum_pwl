@extends('layouts.layout')

@section('todolist')
<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Detail Task</h5>
            <p class="card-text"><strong>Task:</strong> {{ $task->task }}</p>
            <p class="card-text"><strong>Tanggal:</strong> {{ $task->tanggal }}</p>
            <a href="/" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection 