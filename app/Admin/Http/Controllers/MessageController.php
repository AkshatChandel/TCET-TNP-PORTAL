<?php

namespace App\Admin\Http\Controllers;

use App\Models\Message_Draft;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        $StaffId = $request->session()->get('UserId');

        $data = DB::Table('Message_Draft')
            ->join('Staff_Master', 'Staff_Master.Staff_Id', '=', 'Message_Draft.Staff_Id')
            ->where('Staff_Master.Staff_Id', '=', $StaffId)
            ->get();

        return view("admin.message.index", ["messageDrafts" => $data]);
    }

    public function create()
    {
        $students = DB::Table('Student_Master')
            ->where('Student_Master.Student_Status', '=', "Active")
            ->get();

        $branches = DB::Table('Branch_Master')
            ->where('Branch_Master.Branch_Id', '=', 'Branch_Master.Branch')
            ->get();

        return view("admin.message.index", ["branches" => $branches]);
    }
}
