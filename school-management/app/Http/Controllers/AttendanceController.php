<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;

class AttendanceController extends Controller
{
    public function index()
    {
        return response()->json(Attendance::all());
    }

    public function store(Request $request)
    {
        $attendance = Attendance::create($request->all());
        return response()->json($attendance, 201);
    }

    public function show($id)
    {
        return response()->json(Attendance::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance->update($request->all());
        return response()->json($attendance);
    }

    public function destroy($id)
    {
        Attendance::destroy($id);
        return response()->json(['message' => 'Attendance deleted successfully']);
    }
}
