<?php

namespace App\Http\Controllers\Attendance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        return view('attendance.index');
    }

    public function studentAttendance()
    {
        return view('attendance.student');
    }

    public function markAttendance(Request $request)
    {
        // Handle attendance marking
        return redirect()->route('attendance.student')->with('success', 'Attendance marked successfully!');
    }
}
