<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        if ($request->UserType == "Admin") {
            return view("admin");
        } else if ($request->UserType == "Staff") {
            return view("staff");
        } else if ($request->UserType == "Student") {
            return view("student");
        }

        return view();
    }
}
