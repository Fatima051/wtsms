<?php

namespace App\Http\Controllers\Teachers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('teachers.index');
    }

    public function all()
    {
        return view('teachers.all');
    }

    public function details()
    {
        return view('teachers.details');
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        // Handle teacher creation form submission
        return redirect()->route('teachers.all')->with('success', 'Teacher added successfully!');
    }

    public function payment()
    {
        return view('teachers.payment');
    }

    public function processPayment(Request $request)
    {
        // Handle teacher payment
        return redirect()->route('teachers.all')->with('success', 'Payment processed successfully!');
    }
}
