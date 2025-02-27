<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;

class ExamController extends Controller
{
    public function index()
    {
        return response()->json(Exam::all());
    }

    public function store(Request $request)
    {
        $exam = Exam::create($request->all());
        return response()->json($exam, 201);
    }

    public function show($id)
    {
        return response()->json(Exam::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $exam = Exam::findOrFail($id);
        $exam->update($request->all());
        return response()->json($exam);
    }

    public function destroy($id)
    {
        Exam::destroy($id);
        return response()->json(['message' => 'Exam deleted successfully']);
    }
}
