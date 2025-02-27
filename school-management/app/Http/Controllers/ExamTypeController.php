<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamType;

class ExamTypeController extends Controller
{
    public function index()
    {
        return response()->json(ExamType::all());
    }

    public function store(Request $request)
    {
        $examType = ExamType::create($request->all());
        return response()->json($examType, 201);
    }

    public function show($id)
    {
        return response()->json(ExamType::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $examType = ExamType::findOrFail($id);
        $examType->update($request->all());
        return response()->json($examType);
    }

    public function destroy($id)
    {
        ExamType::destroy($id);
        return response()->json(['message' => 'Exam Type deleted successfully']);
    }
}
