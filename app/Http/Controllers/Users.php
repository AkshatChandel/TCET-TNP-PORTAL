<?php

namespace App\Http\Controllers;

use App\Models\Student_Master;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;

class Users extends Controller
{
    public function index()
    {
        return Student_Master::all();
    }
}
