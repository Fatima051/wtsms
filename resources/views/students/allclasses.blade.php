@extends('layouts.dashboard')

@section('title', 'All Classes')

@section('dashboard-content')
<div class="container mt-4">
        <a href="{{ route('students.all') }}" class="btn btn-secondary mb-3">← Back to All Students</a>

    <h2>All Classes & Teachers</h2>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Class Name</th>
                <th>Teacher Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classes as $class)
                <tr>
                    {{-- ✅ Clickable class name --}}
                    <td>
                        <a href="{{ route('students.class.students', $class['class_name']) }}">
                            {{ $class['class_name'] }}
                        </a>
                    </td>
                    <td>{{ $class['teacher_name'] ?: 'No teacher assigned' }}</td>
                    <td>
                        <a href="{{ route('students.class.edit', $class['class_name']) }}" class="btn btn-warning btn-sm">
                            Edit Teacher
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
