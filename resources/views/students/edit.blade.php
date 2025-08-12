@extends('layouts.dashboard')

@section('title', 'Edit Student')

@section('dashboard-content')
<div class="container mt-4">
    <h2>Edit Student</h2>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="name">Student Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $student->name) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="rollno">Roll No</label>
            <input type="text" name="rollno" class="form-control" value="{{ old('rollno', $student->rollno) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="class">Class</label>
            <input type="text" name="class" class="form-control" value="{{ old('class', $student->class) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="section">Section</label>
            <input type="text" name="section" class="form-control" value="{{ old('section', $student->section) }}">
        </div>

        <div class="form-group mb-3">
            <label for="gender">Gender</label>
            <select name="gender" class="form-control">
                <option value="">Select gender</option>
                <option value="Male" {{ old('gender', $student->gender) == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ old('gender', $student->gender) == 'Female' ? 'selected' : '' }}>Female</option>
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="parents">Parents</label>
            <input type="text" name="parents" class="form-control" value="{{ old('parents', $student->parents) }}">
        </div>

        <div class="form-group mb-3">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" value="{{ old('address', $student->address) }}">
        </div>

        <div class="form-group mb-3">
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" class="form-control" value="{{ old('dob', $student->dob) }}">
        </div>

        <div class="form-group mb-3">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ old('phone', $student->phone) }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Student</button>
        <a href="{{ route('students.all') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
