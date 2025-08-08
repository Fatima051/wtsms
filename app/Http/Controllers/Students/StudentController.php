<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index');
    }

    public function all()
    {
        return view('students.all');
    }

    public function details()
    {
        return view('students.details');
    }

    public function admit()
    {
        return view('students.admit');
    }

    public function store(Request $request)
    {
        // Handle student admission form submission
        return redirect()->route('students.all')->with('success', 'Student admitted successfully!');
    }

    public function promotion()
    {
        return view('students.promotion');
    }

    public function promote(Request $request)
    {
        // Handle student promotion
        return redirect()->route('students.all')->with('success', 'Student promoted successfully!');
    }
}
