<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index()
    {
        //default grade 1

    }

    function getStudentsOfClass(Request $request)
    {
        $class = $request->grade;
      
        $studentList = DB::table('students')->where('class', $class)->get();
        return response()->json($studentList, 200);
    }
}
