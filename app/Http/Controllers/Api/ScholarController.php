<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Scholar; // Don't forget this line!
use Illuminate\Http\Request;

class ScholarController extends Controller
{
    // Make sure the word "store" is spelled exactly like this:
    public function store(Request $request) 
    {
        $data = $request->validate([
            'student_id' => 'required|unique:scholars',
            'name' => 'required',
            'email' => 'required|email',
            'course' => 'required',
            'gpa' => 'required|numeric'
        ]);

        $scholar = Scholar::create($data);

        return response()->json($scholar, 201);
    }

    public function index() 
    {
        return response()->json(Scholar::all(), 200);
    }
}