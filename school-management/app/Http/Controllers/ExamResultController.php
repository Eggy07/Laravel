<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamResult;

class ExamResultController extends Controller
{
    public function index()
    {
        return response()->json(ExamResult::all());
    }

    public function store(Request $request)
    {
        $examResult = ExamResult::create($request->all());
        return response()->json($examResult, 201);
    }

    public function show($id)
    {
        return response()->json(ExamResult::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $examResult = ExamResult::findOrFail($id);
        $examResult->update($request->all());
        return response()->json($examResult);
    }

    public function destroy($id)
    {
        ExamResult::destroy($id);
        return response()->json(['message' => 'Exam Result deleted successfully']);
    }
}
