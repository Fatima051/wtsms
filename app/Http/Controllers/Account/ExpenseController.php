<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        return view('expenses.index');
    }

    public function all()
    {
        return view('expenses.all');
    }

    public function create()
    {
        return view('expenses.create');
    }

    public function store(Request $request)
    {
        // Handle expense creation form submission
        return redirect()->route('expenses.all')->with('success', 'Expense added successfully!');
    }
}
