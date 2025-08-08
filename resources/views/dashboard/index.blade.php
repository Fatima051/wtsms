@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('dashboard-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">Dashboard</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Welcome to School Management System</h4>
                </div>
                <div class="card-body">
                    <p>This is the main dashboard. All navigation links in the sidebar should now work.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
