@extends('layouts.dashboard')

@section('title', 'All Admissions')

@section('content')
<div class="container py-5">
    
    <h1 class="mb-4 text-center text-primary fw-bold" style="font-size: 2rem;">📋 All Admissions</h1>

    @if (session('success'))
        <div class="alert alert-success text-center fw-bold">{{ session('success') }}</div>
    @endif

    <div class="table-responsive shadow-lg rounded-4">
        <table class="table table-bordered table-hover text-center align-middle" style="font-size: 1.8rem;">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Student Name</th>
                    <th>Class</th>
                    <th>Parent Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($admissions as $admission)
                <tr>
                    <td>{{ $admission->id }}</td>
                    <td>{{ $admission->student_name }}</td>
                    <td>{{ $admission->student_class }}</td>
                    <td>{{ $admission->parent_name }}</td>
                    <td>{{ $admission->parent_phone }}</td>
                    <td>{{ $admission->address }}</td>
                    <td>
                        <form action="{{ route('admissions.destroy', $admission->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm px-3">🗑 Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-muted">No admissions found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
