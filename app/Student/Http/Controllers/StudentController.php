<?php

namespace App\Student\Http\Controllers;

use App\Models\Announcement;
use App\Models\Announcement_Branch;
use App\Models\Student_Class;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function dashboard(Request $request)
    {
        $StudentId = $request->session()->get('UserId');

        $StudentClass = DB::Table('Student_Class')
            ->where('Student_Id', '=', $StudentId)
            ->where('Student_Class_Status', '=', 'Active')
            ->first();

        $BranchId = $StudentClass->Branch_Id;

        $announcements = DB::Table('Announcement_Branch')
            ->join('Announcement', 'Announcement.Announcement_Id', '=', 'Announcement_Branch.Announcement_Id')
            ->where('Announcement.Announcement_Status', '=', 'Active')
            ->where('Announcement_Branch.Branch_Id', '=', $BranchId)
            ->get();

        $lectures = DB::Table('Training_Lecture')
            ->where('Training_Lecture.Lecture_DateTime', '>=', date("y-m-d h:i:s"))
            ->get();

        return view("student.dashboard.dashboard", ["announcements" => $announcements, "lectures" => $lectures]);
    }

    public function profile()
    {
        $StudentId = session()->get('UserId');

        $student = DB::Table('Student_Master')
            ->join('Student_Class', 'Student_Class.Student_Id', '=', 'Student_Master.Student_Id')
            ->join('Academic_Session_Master', 'Academic_Session_Master.Academic_Session_Id', '=', 'Student_Class.Academic_Session_Id')
            ->join('Branch_Master', 'Branch_Master.Branch_Id', '=', 'Student_Class.Branch_Id')
            ->where('Student_Master.Student_Id', '=', $StudentId)
            ->where('Student_Class.Student_Class_Status', '=', 'Active')
            ->first();

        return view("student.profile.profile", ["student" => $student]);
    }
}
