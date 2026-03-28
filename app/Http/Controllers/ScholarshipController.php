<?php

namespace App\Http\Controllers;

use App\Models\Scholarship;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    // GET /api/scholarships
    public function index()
    {
        return response()->json(Scholarship::all());
    }

    // POST /api/scholarships
    public function store(Request $request)
    {
        $scholarship = Scholarship::create($request->all());
        return response()->json($scholarship, 201);
    }

    // PUT /api/scholarships/{id}
    public function update(Request $request, $id)
    {
        $scholarship = Scholarship::findOrFail($id);
        $scholarship->update($request->all());
        return response()->json($scholarship);
    }

    // DELETE /api/scholarships/{id}
    public function destroy($id)
    {
        $scholarship = Scholarship::findOrFail($id);
        $scholarship->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}