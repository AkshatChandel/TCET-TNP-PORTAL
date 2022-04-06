<?php

namespace App\Admin\Http\Controllers;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view("admin.dashboard.dashboard");
    }
}
