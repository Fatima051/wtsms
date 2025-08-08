<?php

namespace App\Http\Controllers\Library;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('books.index');
    }

    public function all()
    {
        return view('books.all');
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        // Handle book creation form submission
        return redirect()->route('books.all')->with('success', 'Book added successfully!');
    }
}
