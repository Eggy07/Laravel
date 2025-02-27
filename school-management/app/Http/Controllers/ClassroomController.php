<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;

class ClassroomController extends Controller
{
    public function index()
    {
        return response()->json(Classroom::all());
    }

    public function store(Request $request)
    {
        $classroom = Classroom::create($request->all());
        return response()->json($classroom, 201);
    }

    public function show($id)
    {
        return response()->json(Classroom::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $classroom = Classroom::findOrFail($id);
        $classroom->update($request->all());
        return response()->json($classroom);
    }

    public function destroy($id)
    {
        Classroom::destroy($id);
        return response()->json(['message' => 'Classroom deleted successfully']);
    }
}
