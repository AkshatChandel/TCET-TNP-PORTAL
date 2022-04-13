<?php

namespace App\Admin\Http\Controllers;

use App\Models\Staff_Master;
use App\Models\Staff_Branch;
use App\Models\Staff_Login;
use App\Models\Branch_Master;
use App\Models\Designation_Master;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use Hash;

class StaffController extends Controller
{
    public function index()
    {
        $staffs = DB::table('Staff_Master')
            ->join('Staff_Branch', 'Staff_Branch.Staff_Id', '=', 'Staff_Master.Staff_Id')
            ->join('Branch_Master', 'Branch_Master.Branch_Id', '=', 'Staff_Branch.Branch_Id')
            ->join('Designation_Master', 'Designation_Master.Designation_Id', '=', 'Staff_Branch.Designation_Id')
            ->select('Staff_Master.Staff_Id', 'Staff_Master.Staff_College_Id', 'Staff_Master.First_Name', 'Staff_Master.Middle_Name', 'Staff_Master.Last_Name', 'Staff_Master.Date_Of_Birth', 'Staff_Master.Gender', 'Staff_Master.Contact_No', 'Staff_Master.Email_Id', 'Branch_Master.Branch_Name', 'Designation_Master.Designation_Name')
            ->get();

        return view("admin.staff.index", ['staffs' => $staffs]);
    }

    public function create()
    {
        $branches = Branch_Master::where('Branch_Status', 'Active')->get();
        $designations = Designation_Master::where('Designation_Status', 'Active')->get();

        return view("admin.staff.create", ["branches" => $branches, "designations" => $designations]);
    }

    public function createStaff(Request $request)
    {
        $staff_master = new Staff_Master;
        $staff_master->Staff_College_Id = $request->Staff_College_Id;
        $staff_master->First_Name = $request->First_Name;
        $staff_master->Middle_Name = $request->Middle_Name;
        $staff_master->Last_Name = $request->Last_Name;
        $staff_master->Date_Of_Birth = $request->Date_Of_Birth;
        $staff_master->Gender = $request->Gender;
        $staff_master->Contact_No = $request->Contact_No;
        $staff_master->Email_Id = $request->Email_Id;
        $staff_master->Address = $request->Address;
        // $staff_master->Staff_Status = $request->Staff_Status;
        $staff_master->Staff_Status = "Active";
        $staff_master->save();

        $StaffId = $staff_master->Staff_Id;

        $staff_branch = new Staff_Branch;
        $staff_branch->Staff_Id = $StaffId;
        $staff_branch->Branch_Id = $request->Branch_Id;
        $staff_branch->Designation_Id = $request->Designation_Id;
        $staff_branch->Staff_Branch_Status = "Active";
        $staff_branch->save();

        $staff_login = new Staff_Login;
        $staff_login->Staff_Id = $StaffId;
        $staff_login->Staff_Username = "T" . $staff_master->Staff_College_Id;
        // $staff_login->Staff_Password = Hash::make("T" . $staff_master->Staff_College_Id);
        $staff_login->Staff_Password = "T" . $staff_master->Staff_College_Id;
        $staff_login->Is_Admin = "No";
        $staff_login->Staff_Login_Status = "Active";
        $staff_login->save();

        return redirect('/admin/staff/');
    }

    public function edit($StaffId)
    {
        $staff = DB::Table('Staff_Master')
            ->join('Staff_Branch', 'Staff_Branch.Staff_Id', '=', 'Staff_Master.Staff_Id')
            ->join('Branch_Master', 'Branch_Master.Branch_Id', '=', 'Staff_Branch.Branch_Id')
            ->join('Designation_Master', 'Designation_Master.Designation_Id', '=', 'Staff_Branch.Designation_Id')
            ->first();

        $branches = Branch_Master::where('Branch_Status', 'Active')->get();
        $designations = Designation_Master::where('Designation_Status', 'Active')->get();

        return view("admin.staff.edit", ["staff" => $staff, "branches" => $branches, "designations" => $designations]);
    }

    public function editStaff($StaffId, Request $request)
    {
        $staff_master = Staff_Master::find($StaffId);
        $staff_master->Staff_College_Id = $request->Staff_College_Id;
        $staff_master->First_Name = $request->First_Name;
        $staff_master->Middle_Name = $request->Middle_Name;
        $staff_master->Last_Name = $request->Last_Name;
        $staff_master->Date_Of_Birth = $request->Date_Of_Birth;
        $staff_master->Gender = $request->Gender;
        $staff_master->Contact_No = $request->Contact_No;
        $staff_master->Email_Id = $request->Email_Id;
        $staff_master->Address = $request->Address;
        $staff_master->Staff_Status = $request->Staff_Status;
        // $staff_master->Staff_Status = "Active";
        $staff_master->save();

        $staff_branch = Staff_Branch::all()->where('Staff_Id', '=', $StaffId)
            ->where('Staff_Branch_Status', '=', 'Active')
            ->first();
        // $staff_branch->Staff_Id = $StaffId;
        $staff_branch->Branch_Id = $request->Branch_Id;
        $staff_branch->Designation_Id = $request->Designation_Id;
        // $staff_branch->Staff_Branch_Status = "Active";
        $staff_branch->save();

        return redirect('/admin/staff/');
    }
}
