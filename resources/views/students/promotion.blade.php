@extends('layouts.dashboard')

@section('title', 'Students Promotion')

@section('dashboard-content')
<div class="container-fluid">
    <div class="page-header mb-4">
        <h3 class="mb-2">Students</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent p-0">
                <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li class="breadcrumb-item active">Student Promotion</li>
            </ol>
        </nav>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <h5 class="card-title mb-4">Search Student Promotion</h5>

            <form action="{{ route('students.promote') }}" method="POST">
                @csrf
                <div class="row g-3 align-items-center">

                    <div class="col-md-3">
                        <label class="form-label">Current Session *</label>
                        <select name="current_session" class="form-select" required>
                            <option value="">-- Select Session --</option>
                            <option value="2022-2023">2024-2025</option>
                            <option value="2023-2024">2025-2026</option>
                            <option value="2024-2025">2024-2025</option>
                            <option value="2025-2026">2025-2026</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Promote Session *</label>
                        <select name="promote_session" class="form-select" required>
                            <option value="">-- Select Session --</option>
                            <option value="2025-2026">2025-2026</option>
                            <option value="2026-2027">2026-2027</option>
                            <option value="2025-2026">2027-2028</option>
                            <option value="2026-2027">2028-2029</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Promotion From Class *</label>
                        <select name="from_class" class="form-select" required>
                            <option value="">-- Select Class --</option>
                            @foreach($classes as $class)
                                <option value="{{ $class }}">{{ $class }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label class="form-label">Promotion To Class *</label>
                        <select name="to_class" class="form-select" required>
                            <option value="">-- Select Class --</option>
                            @foreach($classes as $class)
                                <option value="{{ $class }}">{{ $class }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mt-4 d-flex gap-2">
                    <button type="submit" class="btn btn-warning text-white px-4">Save</button>
                    <button type="reset" class="btn btn-dark px-4">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
