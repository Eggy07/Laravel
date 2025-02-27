<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Controllers\Controller; // ✅ Add this line

class StudentController extends Controller
{
    // Get all students
    public function index()
    {
        return response()->json(Student::all());
    }

    // Store new student in the database
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:students',
            'password' => 'required|min:6',
            'fname' => 'required|string|max:45',
            'lname' => 'required|string|max:45',
            'dob' => 'nullable|date',
            'phone' => 'nullable|string|max:15',
            'mobile' => 'nullable|string|max:15',
            'parent_id' => 'nullable|exists:parents,id',
            'date_of_join' => 'nullable|date',
            'status' => 'boolean',
            'last_login_date' => 'nullable|date',
            'last_login_ip' => 'nullable|string|max:45',
        ]);

        $student = Student::create($request->all());

        return response()->json(['message' => 'Student created successfully', 'student' => $student]);
    }
}
