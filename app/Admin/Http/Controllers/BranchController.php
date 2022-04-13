<?php

namespace App\Admin\Http\Controllers;

use App\Models\Branch_Master;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index()
    {
        $branches = Branch_Master::all();
        return view("admin.branch.index", ["branches" => $branches]);
    }

    public function create()
    {
        return view("admin.branch.create");
    }

    public function createBranch(Request $request)
    {
        $branch = new Branch_Master;
        $branch->Branch_Name = $request->Branch_Name;
        $branch->Branch_Code = $request->Branch_Code;
        $branch->Branch_Status = $request->Branch_Status;
        $branch->save();

        return redirect('/admin/branch/');
    }

    public function edit($BranchId)
    {
        $branch = Branch_Master::find($BranchId);
        return view("admin.branch.edit", ["branch" => $branch]);
    }

    public function editBranch($BranchId, Request $request)
    {
        $branch = Branch_Master::find($BranchId);
        $branch->Branch_Name = $request->Branch_Name;
        $branch->Branch_Code = $request->Branch_Code;
        $branch->Branch_Status = $request->Branch_Status;
        $branch->save();

        return redirect('/admin/branch/');
    }
}
