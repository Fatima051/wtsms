<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeesController extends Controller
{
    public function index()
    {
        return view('fees.index');
    }

    public function all()
    {
        return view('fees.all');
    }

    public function collect(Request $request)
    {
        // Handle fees collection
        return redirect()->route('fees.all')->with('success', 'Fees collected successfully!');
    }
}
