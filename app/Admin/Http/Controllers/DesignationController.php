<?php

namespace App\Admin\Http\Controllers;

use App\Models\Designation_Master;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index()
    {
        $data = Designation_Master::all();
        return view("admin.designation.index", ["Designations" => $data]);
    }

    public function create()
    {
        return view("admin.designation.create");
    }

    public function createDesignation(Request $request)
    {
        $designation = new Designation_Master;
        $designation->Designation_Name = $request->Designation_Name;
        $designation->Designation_Status = $request->Designation_Status;
        $designation->save();

        return redirect('/admin/designation/');
    }
}
