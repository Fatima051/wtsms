<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use App\Models\StudentModel;
use Illuminate\Http\Request;
use App\Models\ClassModel;

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
        return redirect()->route('students.all');
    }

    // Normalize class names so data stays consistent
    private function normalizeClassName($input)
    {
        $classInput = trim($input);

        // If input is just a number → "Grade X"
        if (is_numeric($classInput)) {
            $classInput = 'Grade ' . $classInput;
        }

        // Handle "Pre" classes
        if (stripos($classInput, 'pre') === 0) {
            $number = trim(substr($classInput, 3));
            $classInput = 'Pre ' . $number;
        }

        // Ensure consistent case
        return ucwords(strtolower($classInput));
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

        // Normalize and save
        $studentData = $request->all();
        $studentData['class'] = $this->normalizeClassName($request->class);
        $student = StudentModel::create($studentData);

        // Ensure class exists in ClassModel
        ClassModel::firstOrCreate(
            ['class_name' => $studentData['class']],
            ['teacher_name' => '']
        );

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

    public function promotion()
    {
        $classes = [
            'Pre 1', 'Pre 2', 'Pre 3',
            'Grade 1', 'Grade 2', 'Grade 3', 'Grade 4', 'Grade 5',
            'Grade 6', 'Grade 7', 'Grade 8', 'Grade 9', 'Grade 10',
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

    // Update all students from the old class to the new class
    StudentModel::where('class', $this->normalizeClassName($request->from_class))
        ->update(['class' => $this->normalizeClassName($request->to_class)]);

    // Ensure the promoted-to class exists in ClassModel
    ClassModel::firstOrCreate(
        ['class_name' => $this->normalizeClassName($request->to_class)],
        ['teacher_name' => '']
    );

    return redirect()->route('students.promotion')
        ->with('success', 'Students promoted successfully!');
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

        // Normalize class name before updating
        $studentData = $request->all();
        $studentData['class'] = $this->normalizeClassName($request->class);
        $student->update($studentData);

        // Ensure class exists in ClassModel
        ClassModel::firstOrCreate(
            ['class_name' => $studentData['class']],
            ['teacher_name' => '']
        );

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

    public function allclasses()
    {
        $classList = [
            'Pre 1', 'Pre 2', 'Pre 3',
            'Grade 1', 'Grade 2', 'Grade 3', 'Grade 4', 'Grade 5',
            'Grade 6', 'Grade 7', 'Grade 8', 'Grade 9', 'Grade 10',
        ];

        $classes = [];
        foreach ($classList as $name) {
            $hasStudents = StudentModel::where('class', $name)->exists();
            $classRecord = ClassModel::where('class_name', $name)->first();

            $classes[] = [
                'class_name'   => $name,
                'teacher_name' => $classRecord->teacher_name ?? '',
                'id'           => $classRecord->id ?? null,
                'has_students' => $hasStudents
            ];
        }

        return view('students.allclasses', compact('classes'));
    }

    public function editClass($className)
    {
        $class = ClassModel::firstOrCreate(
            ['class_name' => $className],
            ['teacher_name' => '']
        );

        return view('students.edit_class', compact('class'));
    }

    public function updateClass(Request $request, $id)
    {
        $request->validate(['teacher_name' => 'required|string|max:255']);
        $class = ClassModel::findOrFail($id);
        $class->update(['teacher_name' => $request->teacher_name]);

        return redirect()->route('students.allclasses')->with('success', 'Teacher updated successfully.');
    }

    public function classStudents($className)
    {
        $students = StudentModel::where('class', $className)->get();
        return view('students.class_students', compact('className', 'students'));
    }
}
