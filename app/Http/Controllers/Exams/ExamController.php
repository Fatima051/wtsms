<?php

namespace App\Http\Controllers\Exams;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function schedule()
    {
        return view('exams.schedule');
    }

    public function grades()
    {
        return view('exams.grades');
    }

    public function storeSchedule(Request $request)
    {
        // Handle exam schedule creation
        return redirect()->route('exams.schedule')->with('success', 'Exam schedule created successfully!');
    }

    public function storeGrades(Request $request)
    {
        // Handle exam grades creation
        return redirect()->route('exams.grades')->with('success', 'Exam grades created successfully!');
    }
}
