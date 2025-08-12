@extends('layouts.dashboard')

@section('title', 'All Students')

@section('dashboard-content')
    <div class="container-fluid">

        {{-- ✅ Success Alert --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- ⚠ Error Alert --}}
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- Validation Errors --}}
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        {{-- Page Header --}}
        <div class="row mb-3">
            <div class="col-lg-12">
                <div class="breadcrumb-main">
                    <h4 class="text-capitalize breadcrumb-title">All Students Data</h4>
                    <div class="breadcrumb-action justify-content-center flex-wrap">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard.index') }}">
                                        <i class="uil uil-estate"></i> Dashboard
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">All Students</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        {{-- Search Bar --}}
        <div class="row mb-4">
            <div class="col-md-3 mb-2">
                <input type="text" id="searchRoll" class="form-control form-control-lg border-primary shadow-sm"
                    placeholder="🔍 Search by Roll ...">
            </div>
            <div class="col-md-3 mb-2">
                <input type="text" id="searchName" class="form-control form-control-lg border-success shadow-sm"
                    placeholder="🔍 Search by Name ...">
            </div>
            <div class="col-md-3 mb-2">
                <input type="text" id="searchClass" class="form-control form-control-lg border-info shadow-sm"
                    placeholder="🔍 Search by Class ...">
            </div>
            <div class="col-md-3 mb-2">
                <button id="clearSearch" class="btn btn-lg btn-warning w-100 shadow-sm">Clear Search</button>
            </div>
        </div>

        <style>
            .highlight {
                background-color: yellow !important;
                font-weight: bold;
            }
        </style>

        {{-- Students Table --}}
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>Roll</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Class</th>
                                <th>Section</th>
                                <th>Parents</th>
                                <th>Address</th>
                                <th>Date Of Birth</th>
                                <th>Phone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($students as $student)
                                <tr>
                                    <td>#{{ str_pad($student->rollno, 4, '0', STR_PAD_LEFT) }}</td>
                                    <td>
                                        <a href="{{ route('students.details', $student->id) }}">{{ $student->name }}</a>
                                    </td>
                                    <td>{{ $student->gender }}</td>
                                    <td>{{ $student->class }}</td>
                                    <td>{{ $student->section }}</td>
                                    <td>{{ $student->parents }}</td>
                                    <td>{{ $student->address }}</td>
                                    <td>{{ $student->dob }}</td>
                                    <td>{{ $student->phone }}</td>

                                    {{-- Actions dropdown --}}
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-light btn-sm dropdown-toggle" type="button"
                                                id="dropdownMenuButton{{ $student->id }}" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                &#x22EE; {{-- vertical ellipsis (3 dots) --}}
                                            </button>
                                            <ul class="dropdown-menu"
                                                aria-labelledby="dropdownMenuButton{{ $student->id }}">
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('students.edit', $student->id) }}">Edit</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="{{ route('students.refresh', $student->id) }}">Refresh</a>
                                                </li>
                                                <li>
                                                    <form action="{{ route('students.delete', $student->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Are you sure you want to delete this student?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="dropdown-item text-danger"
                                                            type="submit">Delete</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10" class="text-center">No students found.</td>
                                </tr>
                            @endforelse
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Search Script --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const inputs = document.querySelectorAll("#searchRoll, #searchName, #searchClass");
            const rows = document.querySelectorAll("tbody tr");
            const clearBtn = document.getElementById("clearSearch");

            function searchTable() {
                const rollVal = document.getElementById("searchRoll").value.toLowerCase();
                const nameVal = document.getElementById("searchName").value.toLowerCase();
                const classVal = document.getElementById("searchClass").value.toLowerCase();

                rows.forEach(row => {
                    let rollCell = row.cells[0]?.textContent.toLowerCase();
                    let nameCell = row.cells[1]?.textContent.toLowerCase();
                    let classCell = row.cells[3]?.textContent.toLowerCase();

                    let match = true;

                    row.querySelectorAll("td").forEach(td => td.classList.remove("highlight"));

                    if (rollVal && !rollCell.includes(rollVal)) match = false;
                    if (nameVal && !nameCell.includes(nameVal)) match = false;
                    if (classVal && !classCell.includes(classVal)) match = false;

                    if (match) {
                        row.style.display = "";
                        if (rollVal && rollCell.includes(rollVal)) row.cells[0].classList.add("highlight");
                        if (nameVal && nameCell.includes(nameVal)) row.cells[1].classList.add("highlight");
                        if (classVal && classCell.includes(classVal)) row.cells[3].classList.add(
                            "highlight");
                    } else {
                        row.style.display = "none";
                    }
                });
            }

            inputs.forEach(input => input.addEventListener("keyup", searchTable));

            clearBtn.addEventListener("click", function() {
                inputs.forEach(input => input.value = "");
                rows.forEach(row => {
                    row.style.display = "";
                    row.querySelectorAll("td").forEach(td => td.classList.remove("highlight"));
                });
            });
        });
    </script>
@endsection
