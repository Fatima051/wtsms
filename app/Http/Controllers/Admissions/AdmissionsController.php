<?php

namespace App\Http\Controllers\Admissions;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdmissionsModel;

class AdmissionsController extends Controller
{
    public function all()
    {
        $admissions = AdmissionsModel::all();
        return view('admissions.all', compact('admissions'));
    }

    public function create()
    {
        return view('admissions.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_name' => 'required|string|max:255',
            'student_class' => 'required|string|max:255',
            'parent_name' => 'required|string|max:255',
            'parent_phone' => 'required|string|max:15',
            'address' => 'nullable|string',
        ]);

        AdmissionsModel::create($request->all());

        return redirect()->route('admissions.all')
                         ->with('success', 'Student added successfully!');
    }

    public function destroy($id)
    {
        $admission = AdmissionsModel::findOrFail($id);
        $admission->delete();

        return redirect()->route('admissions.all')
                         ->with('success', 'Student deleted successfully!');
    }
}
