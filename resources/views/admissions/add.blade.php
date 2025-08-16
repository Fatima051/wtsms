@extends('layouts.dashboard')

@section('title', 'Add New Admissions')

@section('dashboard-content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-lg rounded-4 border-0">
                <div class="card-header bg-primary text-white text-center py-3 rounded-top-4">
                    <h2 class="mb-0 fw-bold">✨ Add New Admission ✨</h2>
                </div>

                <div class="card-body p-4">
                    <form action="{{ route('admissions.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label for="student_name" class="form-label fw-bold fs-5">Student Name</label>
                            <input type="text" name="student_name" class="form-control form-control-lg" required>
                        </div>

                        <div class="mb-4">
                            <label for="student_class" class="form-label fw-bold fs-5">Student Class</label>
                            <input type="text" name="student_class" class="form-control form-control-lg" required>
                        </div>

                        <div class="mb-4">
                            <label for="parent_name" class="form-label fw-bold fs-5">Parent Name</label>
                            <input type="text" name="parent_name" class="form-control form-control-lg" required>
                        </div>

                        <div class="mb-4">
                            <label for="parent_phone" class="form-label fw-bold fs-5">Parent Phone</label>
                            <input type="text" name="parent_phone" class="form-control form-control-lg" required>
                        </div>

                        <div class="mb-4">
                            <label for="address" class="form-label fw-bold fs-5">Address</label>
                            <textarea name="address" class="form-control form-control-lg" rows="3"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-success px-5 py-2 shadow-sm fw-bold">
                                ➕ Add Student
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
