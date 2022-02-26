<?php

namespace App\Student\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function dashboard()
    {
        return view("student.dashboard.dashboard");
    }
}
