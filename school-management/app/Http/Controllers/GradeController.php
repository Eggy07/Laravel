<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;

class GradeController extends Controller
{
    public function index()
    {
        return response()->json(Grade::all());
    }

    public function store(Request $request)
    {
        $grade = Grade::create($request->all());
        return response()->json($grade, 201);
    }

    public function show($id)
    {
        return response()->json(Grade::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $grade = Grade::findOrFail($id);
        $grade->update($request->all());
        return response()->json($grade);
    }

    public function destroy($id)
    {
        Grade::destroy($id);
        return response()->json(['message' => 'Grade deleted successfully']);
    }
}
