<?php

namespace App\Http\Controllers\Parents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    public function index()
    {
        return view('parents.index');
    }

    public function all()
    {
        return view('parents.all');
    }

    public function details()
    {
        return view('parents.details');
    }

    public function create()
    {
        return view('parents.create');
    }

    public function store(Request $request)
    {
        // Handle parent creation form submission
        return redirect()->route('parents.all')->with('success', 'Parent added successfully!');
    }
}
