@extends('layouts.dashboard')

@section('title', 'Student Details')

@section('dashboard-content')
    <div class="container-fluid">
        <div class="breadcrumbs-area">
            <h3>Students</h3>
            <ul>
                <li><a href="{{ route('dashboard.index') }}">Home</a></li>
                <li>Student Details</li>
            </ul>
        </div>

        <div class="card height-auto">
            <div class="card-body">
                <div class="single-info-details">
                    <div class="item-img">
                        <img src="{{ asset('img/figure/student1.jpg') }}" alt="student">
                    </div>
                    <div class="item-content">
                        <h3 class="text-dark-medium font-medium">{{ $student->name }}</h3>
                        <div class="info-table table-responsive">
                            <table class="table text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>Name:</td>
                                        <td>{{ $student->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Roll:</td>
                                        <td>{{ $student->rollno }}</td>
                                    </tr>
                                    <tr>
                                        <td>Class:</td>
                                        <td>{{ $student->class }}</td>
                                    </tr>
                                    <tr>
                                        <td>Section:</td>
                                        <td>{{ $student->section }}</td>
                                    </tr>
                                    <tr>
                                        <td>Gender:</td>
                                        <td>{{ $student->gender }}</td>
                                    </tr>
                                    <tr>
                                        <td>Parents:</td>
                                        <td>{{ $student->parents }}</td>
                                    </tr>
                                    <tr>
                                        <td>Date Of Birth:</td>
                                        <td>{{ $student->dob }}</td>
                                    </tr>

                                    <tr>
                                        <td>Address:</td>
                                        <td>{{ $student->address }}</td>
                                    </tr>
                                    <tr>
                                        <td>Phone:</td>
                                        <td>{{ $student->phone }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
