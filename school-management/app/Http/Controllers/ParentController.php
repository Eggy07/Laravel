<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ParentModel;

class ParentController extends Controller
{
    public function index()
    {
        return response()->json(ParentModel::all());
    }

    public function store(Request $request)
    {
        $parent = ParentModel::create($request->all());
        return response()->json($parent, 201);
    }

    public function show($id)
    {
        return response()->json(ParentModel::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $parent = ParentModel::findOrFail($id);
        $parent->update($request->all());
        return response()->json($parent);
    }

    public function destroy($id)
    {
        ParentModel::destroy($id);
        return response()->json(['message' => 'Parent deleted successfully']);
    }
}

