<?php

namespace App\Http\Controllers\Classes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoutineController extends Controller
{
    public function index()
    {
        return view('routine.index');
    }

    public function classRoutine()
    {
        return view('routine.class');
    }
}
