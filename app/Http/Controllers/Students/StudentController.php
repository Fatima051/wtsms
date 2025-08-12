<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\StudentModel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('students.index');
    }

    public function all()
    {
        $students = StudentModel::all();
        return view('students.all', compact('students'));
    }

    public function details($id)
    {
        $student = StudentModel::findOrFail($id);
        return view('students.details', compact('student'));
    }

    public function addStore(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'rollno'   => 'required|string|max:50',
            'class'    => 'required|string|max:50',
            'section'  => 'nullable|string|max:50',
            'gender'   => 'nullable|string|max:20',
            'parents'  => 'nullable|string|max:255',
            'address'  => 'nullable|string|max:255',
            'dob'      => 'nullable|date',
            'phone'    => 'nullable|string|max:20',
        ]);

        $student = StudentModel::create($request->all());

        return redirect()->route('students.all')->with('success', 'Student added successfully!');
    }

    public function admit()
    {
        return view('students.admit');
    }

    public function add()
    {
        return view('students.add');
    }

    public function store(Request $request)
    {
        return redirect()->route('students.all')->with('success', 'Student admitted successfully!');
    }

    // Promotion page (NO ClassModel)
    public function promotion()
    {
        // Predefined list of classes
        $classes = [
            'Pre 1',
            'Pre 2',
            'Pre 3',
            'Grade 1',
            'Grade 2',
            'Grade 3',
            'Grade 4',
            'Grade 5',
            'Grade 6',
            'Grade 7',
            'Grade 8',
            'Grade 9',
            'Grade 10',
        ];

        return view('students.promotion', compact('classes'));
    }

    public function promote(Request $request)
    {
        $request->validate([
            'current_session' => 'required|string',
            'promote_session' => 'required|string',
            'from_class'      => 'required|string',
            'to_class'        => 'required|string',
        ]);

        // You can add DB logic here to update students' class
        // Example: StudentModel::where('class', $request->from_class)->update(['class' => $request->to_class]);

        return redirect()->route('students.all')->with('success', 'Students promoted successfully!');
    }

    public function edit($id)
    {
        $student = StudentModel::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'rollno'   => 'required|string|max:50',
            'class'    => 'required|string|max:50',
            'section'  => 'nullable|string|max:50',
            'gender'   => 'nullable|string|max:20',
            'parents'  => 'nullable|string|max:255',
            'address'  => 'nullable|string|max:255',
            'dob'      => 'nullable|date',
            'phone'    => 'nullable|string|max:20',
        ]);

        $student = StudentModel::findOrFail($id);
        $student->update($request->all());

        return redirect()->route('students.all')->with('success', 'Student updated successfully!');
    }

    public function delete($id)
    {
        $student = StudentModel::findOrFail($id);
        $student->delete();

        return redirect()->route('students.all')->with('success', 'Student deleted successfully!');
    }

    public function refresh($id)
    {
        return redirect()->route('students.details', $id);
    }

    
}
