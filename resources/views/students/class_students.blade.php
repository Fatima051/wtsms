@extends('layouts.dashboard')

@section('title', 'Students in ' . $className)

@section('dashboard-content')
<div class="container mt-4">
        <a href="{{ route('students.allclasses') }}" class="btn btn-secondary mb-3">← Back to All Classes</a>
            <h2>Students in {{ $className }}</h2>
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
                <button id="clearSearch" class="btn btn-lg btn-warning w-100 shadow-sm">Clear Search</button>
            </div>
        </div>

        <style>
            .highlight {
                background-color: yellow !important;
                font-weight: bold;
            }
        </style>
    @if($students->isEmpty())
        <div class="alert alert-warning">No students found in this class.</div>
    @else
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Roll</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Section</th>
                        <th>Parents</th>
                        <th>Address</th>
                        <th>Date Of Birth</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>#{{ str_pad($student->rollno, 4, '0', STR_PAD_LEFT) }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->section }}</td>
                            <td>{{ $student->parents }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->dob }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>
                                <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('students.delete', $student->id) }}" method="POST" style="display:inline-block;">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this student?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
  {{-- Search Script --}}
   <script>
    document.addEventListener("DOMContentLoaded", function() {
        const inputs = document.querySelectorAll("#searchRoll, #searchName, #searchClass");
        const rows = document.querySelectorAll("tbody tr");

        function searchTable() {
            const rollVal = document.getElementById("searchRoll").value.toLowerCase().trim();
            const nameVal = document.getElementById("searchName").value.toLowerCase().trim();

            rows.forEach(row => {
                // Get cell texts
                let rollCellRaw = row.cells[0]?.textContent.toLowerCase().trim() || "";
                // Remove leading '#' from roll for searching
                let rollCell = rollCellRaw.startsWith('#') ? rollCellRaw.substring(1) : rollCellRaw;

                let nameCell = row.cells[1]?.textContent.toLowerCase().trim() || "";

                let match = true;

                // Remove previous highlights
                row.querySelectorAll("td").forEach(td => td.classList.remove("highlight"));

                if (rollVal && !rollCell.includes(rollVal)) match = false;
                if (nameVal && !nameCell.includes(nameVal)) match = false;

                if (match) {
                    row.style.display = "";
                    if (rollVal && rollCell.includes(rollVal)) row.cells[0].classList.add("highlight");
                    if (nameVal && nameCell.includes(nameVal)) row.cells[1].classList.add("highlight");
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
    document.getElementById('clearSearch').addEventListener('click', function () {
    // Clear all input values
    document.getElementById('searchRoll').value = '';
    document.getElementById('searchName').value = '';
    document.getElementById('searchClass').value = '';

    // Trigger input events to refresh the table
    let event = new Event('input');
    document.getElementById('searchRoll').dispatchEvent(event);
    document.getElementById('searchName').dispatchEvent(event);
    document.getElementById('searchClass').dispatchEvent(event);
});
</script>
@endsection
