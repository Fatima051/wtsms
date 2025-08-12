@extends('layouts.dashboard')

@section('title', 'Add Student')

@section('dashboard-content')
    <div class="container mt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-main">
                        <h1 class="text-capitalize breadcrumb-title">Add new Students</h1>
                        <div class="breadcrumb-action justify-content-center flex-wrap">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i
                                                class="uil uil-estate"></i>Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add New Students</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>



            <form action="{{ route('students.add.store') }}" method="POST">
                @csrf



                <div class="form-group mb-3">
                    <label for="name">Student Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter full name" required>
                </div>
                <div class="form-group mb-3">
                    <label for="rollno">Roll No</label>
                    <input type="text" name="rollno" class="form-control" placeholder="Enter roll number" required>
                </div>


                <div class="form-group mb-3">
                    <label for="class">Class</label>
                    <input type="text" name="class" class="form-control" placeholder="Enter class" required>
                </div>

                <div class="form-group mb-3">
                    <label for="section">Section</label>
                    <input type="text" name="section" class="form-control" placeholder="Enter section">
                </div>
                <div class="form-group mb-3">
                    <label for="gender">Gender</label>
                    <select name="gender" class="form-control">
                        <option value="">Select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="parents">Parents</label>
                    <input type="text" name="parents" class="form-control" placeholder="Enter parents' name">
                </div>

                <div class="form-group mb-3">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" placeholder="Enter address">
                </div>

                <div class="form-group mb-3">
                    <label for="dob">Date of Birth</label>
                    <input type="date" name="dob" class="form-control">
                </div>

                <div class="form-group mb-3">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter phone number">
                </div>
                <button type="submit" class="btn btn-primary">Add Student</button>
            </form>
        </div>
    @endsection
