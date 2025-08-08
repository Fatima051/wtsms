@extends('layouts.dashboard')

@section('title', 'Student Admission')

@section('dashboard-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">Student Admission</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}"><i class="uil uil-estate"></i>Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Student Admission</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Admission Form</h4>
                </div>
                <div class="card-body">
                    <p>Student admission form is under construction. Content will be added soon.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
