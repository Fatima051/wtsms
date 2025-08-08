<?php

namespace App\Http\Controllers\Classes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        return view('classes.index');
    }

    public function all()
    {
        return view('classes.all');
    }

    public function create()
    {
        return view('classes.create');
    }

    public function store(Request $request)
    {
        // Handle class creation form submission
        return redirect()->route('classes.all')->with('success', 'Class added successfully!');
    }
}
