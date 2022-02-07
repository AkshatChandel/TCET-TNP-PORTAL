<?php

namespace App\Admin\Http\Controllers;

use App\Models\Academic_Session_Master;
use App\Models\Branch_Master;
use App\Models\Student_Master;
use App\Models\Student_Class;
use App\Models\Student_Login;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // $students = Student_Master::all();

        $students = DB::table('Student_Master')
            ->join('Student_Class', 'Student_Class.Student_Id', '=', 'Student_Master.Student_Id')
            ->join('Academic_Session_Master', 'Academic_Session_Master.Academic_Session_Id', '=', 'Student_Class.Academic_Session_Id')
            ->join('Branch_Master', 'Branch_Master.Branch_Id', '=', 'Student_Class.Branch_Id')
            ->select('Student_Master.Student_Id', 'Student_Master.Student_College_Id', 'Student_Master.First_Name', 'Student_Master.Middle_Name', 'Student_Master.Last_Name', 'Student_Master.Date_Of_Birth', 'Student_Master.Gender', 'Student_Master.Contact_No', 'Student_Master.Email_Id', 'Student_Class.Semester', 'Student_Class.Roll_No', 'Academic_Session_Master.Academic_Session_Name', 'Branch_Master.Branch_Name')
            ->get();

        return view("admin.student.index", ['students' => $students]);
    }

    public function create()
    {
        $branches = Branch_Master::where('Branch_Status', 'Active')->get();
        $AcademicSessions = Academic_Session_Master::where('Academic_Session_Status', 'Active')->get();

        return view("admin.student.create", ["branches" => $branches, "AcademicSessions" => $AcademicSessions]);
    }

    public function createStudent(Request $request)
    {
        $student_master = new Student_Master;
        $student_master->Student_College_Id = $request->Student_College_Id;
        $student_master->First_Name = $request->First_Name;
        $student_master->Middle_Name = $request->Middle_Name;
        $student_master->Last_Name = $request->Last_Name;
        $student_master->Date_Of_Birth = $request->Date_Of_Birth;
        $student_master->Gender = $request->Gender;
        $student_master->Contact_No = $request->Contact_No;
        $student_master->Email_Id = $request->Email_Id;
        $student_master->Address = $request->Address;
        $student_master->Class_10_Percentage = $request->Class_10_Percentage;
        $student_master->From_Class12_Or_Diploma = $request->From_Class12_Or_Diploma;

        if ($request->From_Class12_Or_Diploma == "Class 12") {

            if ($request->Class_12_Percentage != null && trim($request->Class_12_Percentage) != "") {
                $student_master->Class_12_Percentage = $request->Class_12_Percentage;
            } else {
                $student_master->Class_12_Percentage = 0;
            }

            if ($request->JEE_Marks != null && trim($request->JEE_Marks) != "") {
                $student_master->JEE_Marks = $request->JEE_Marks;
            } else {
                $student_master->JEE_Marks = 0;
            }

            if ($request->JEE_Out_Of != null && trim($request->JEE_Out_Of) != "") {
                $student_master->JEE_Out_Of = $request->JEE_Out_Of;
            } else {
                $student_master->JEE_Out_Of = 0;
            }

            if ($request->CET_Marks != null && trim($request->CET_Marks) != "") {
                $student_master->CET_Marks = $request->CET_Marks;
            } else {
                $student_master->CET_Marks = 0;
            }

            if ($request->CET_Out_Of != null && trim($request->CET_Out_Of) != "") {
                $student_master->CET_Out_Of = $request->CET_Out_Of;
            } else {
                $student_master->CET_Out_Of = 0;
            }

            // $student_master->Class_12_Percentage = $request->Class_12_Percentage;
            // $student_master->JEE_Marks = $request->JEE_Marks;
            // $student_master->JEE_Out_Of = $request->JEE_Out_Of;
            // $student_master->CET_Marks = $request->CET_Marks;
            // $student_master->CET_Out_Of = $request->CET_Out_Of;
            $student_master->Diploma_Percentage = 0;
        } else if ($request->From_Class12_Or_Diploma == "Diploma") {

            if ($request->Diploma_Percentage != null && trim($request->Diploma_Percentage) != "") {
                $student_master->Diploma_Percentage = $request->Diploma_Percentage;
            } else {
                $student_master->Diploma_Percentage = 0;
            }

            // $student_master->Diploma_Percentage = $request->Diploma_Percentage;
            $student_master->Class_12_Percentage = 0;
            $student_master->JEE_Marks = 0;
            $student_master->JEE_Out_Of = 0;
            $student_master->CET_Marks = 0;
            $student_master->CET_Out_Of = 0;
        }

        // $student_master->Student_Status = $request->Student_Status;
        $student_master->Student_Status = "Active";
        $student_master->save();

        $StudentId = $student_master->id;

        $student_class = new Student_Class;
        $student_class->Student_Id = $StudentId;
        $student_class->Academic_Session_Id = $request->Academic_Session_Id;
        $student_class->Branch_Id = $request->Branch_Id;
        $student_class->Semester = $request->Semester;
        $student_class->Roll_No = $request->Roll_No;
        // $student_class->Student_Class_Status = $request->Student_Class_Status;

        $student_class->Student_Class_Status = "Active";
        $student_class->save();

        $student_login = new Student_Login;
        $student_login->Student_Id = $StudentId;
        $student_login->Student_Username = "S" . $student_master->Student_College_Id;
        $student_login->Student_Password = "S" . $student_master->Student_College_Id;
        $student_login->Student_Login_Status = "Active";
        $student_login->save();

        return redirect('/admin/student/');
    }
}
