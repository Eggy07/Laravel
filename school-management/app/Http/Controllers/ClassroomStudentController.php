<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassroomStudent;

class ClassroomStudentController extends Controller
{
    public function index()
    {
        return response()->json(ClassroomStudent::all());
    }

    public function store(Request $request)
    {
        $classroomStudent = ClassroomStudent::create($request->all());
        return response()->json($classroomStudent, 201);
    }

    public function show($id)
    {
        return response()->json(ClassroomStudent::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $classroomStudent = ClassroomStudent::findOrFail($id);
        $classroomStudent->update($request->all());
        return response()->json($classroomStudent);
    }

    public function destroy($id)
    {
        ClassroomStudent::destroy($id);
        return response()->json(['message' => 'Classroom Student deleted successfully']);
    }
}
