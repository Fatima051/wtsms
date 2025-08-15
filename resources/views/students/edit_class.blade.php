@extends('layouts.dashboard')

@section('title', 'Edit Teacher for ' . $class->class_name)

@section('dashboard-content')
<div class="container mt-4">
    <h2>Edit Teacher for {{ $class->class_name }}</h2>
    <form action="{{ route('students.class.update', $class->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Teacher Name</label>
            <input type="text" name="teacher_name" class="form-control" value="{{ old('teacher_name', $class->teacher_name) }}" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
        <a href="{{ route('students.allclasses') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
