@extends('layouts.app')

@section('content')
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('partials.header')
    <!-- Header Menu Area End Here -->
    
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
        @include('partials.sidebar')
        <!-- Sidebar Area End Here -->
        
        <div class="dashboard-content-one">
            @yield('dashboard-content')
        </div>
    </div>
    <!-- Page Area End Here -->
</div>
@endsection
