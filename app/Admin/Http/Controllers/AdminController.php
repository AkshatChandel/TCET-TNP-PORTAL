<?php

namespace App\Admin\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view("admin.dashboard.dashboard");
    }
}
