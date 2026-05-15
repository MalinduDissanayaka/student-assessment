<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        // 1. Validate all fields 
        $request->validate([
            'student_name' => 'required|string|max:50',
            'mark1' => 'required|numeric|min:0|max:100',
            'mark2' => 'required|numeric|min:0|max:100',
            'mark3' => 'required|numeric|min:0|max:100',
        ]);

        // 2. Calculate total and average 
        $total = $request->mark1 + $request->mark2 + $request->mark3;
        $average = $total / 3;

        // 3. Display Pass/Fail status (Pass if average >= 50) [cite: 18, 20]
        $status = $average >= 50 ? 'Pass' : 'Fail';

        // 4. Return to screen with results [cite: 21]
        return back()->with([
            'name' => $request->student_name,
            'total' => $total,
            'average' => round($average, 2),
            'status' => $status
        ])->withInput();
    }
}