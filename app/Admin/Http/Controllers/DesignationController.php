<?php

namespace App\Admin\Http\Controllers;

use App\Models\Designation_Master;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DesignationController extends Controller
{
    public function index()
    {
        $designations = Designation_Master::all();
        return view("admin.designation.index", ["Designations" => $designations]);
    }

    public function create()
    {
        return view("admin.designation.create");
    }

    public function createDesignation(Request $request)
    {
        $designation_master = new Designation_Master;
        $designation_master->Designation_Name = $request->Designation_Name;
        $designation_master->Designation_Status = $request->Designation_Status;
        $designation_master->save();

        return redirect('/admin/designation/');
    }

    public function edit($DesignationId)
    {
        $designation = DB::Table('Designation_Master')
            ->where('Designation_Master.Designation_Id', '=', $DesignationId)
            ->first();

        return view("admin.designation.edit", ["designation" => $designation]);
    }

    public function editDesignation($DesignationId, Request $request)
    {
        $designation_master = Designation_Master::find($DesignationId);
        $designation_master->Designation_Name = $request->Designation_Name;
        $designation_master->Designation_Status = $request->Designation_Status;
        $designation_master->save();

        return redirect('/admin/designation/');
    }
}
