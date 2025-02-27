<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        return view('courses.index', ['courses' => Course::all()]);
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        Course::create($request->all());
        return redirect()->route('courses.index');
    }

    public function show($id)
    {
        return view('courses.show', ['course' => Course::findOrFail($id)]);
    }

    public function edit($id)
    {
        return view('courses.edit', ['course' => Course::findOrFail($id)]);
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->update($request->all());
        return redirect()->route('courses.index');
    }

    public function destroy($id)
    {
        Course::destroy($id);
        return redirect()->route('courses.index');
    }
}
