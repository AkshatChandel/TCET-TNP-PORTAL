<?php

namespace App\Student\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        $StudentId = session()->get('UserId');

        $student = DB::table('Student_Class')
            ->join('Branch_Master', 'Branch_Master.Branch_Id', '=', 'Student_Class.Branch_Id')
            ->where('Student_Class.Student_Id', '=', $StudentId)
            ->select('Student_Class.Student_Class_Id', 'Branch_Master.Branch_Id')
            ->first();

        $BranchId = $student->Branch_Id;

        $lectures = DB::Table('Training_Lecture')
            ->join('Academic_Session_Master', 'Academic_Session_Master.Academic_Session_Id', '=', 'Training_Lecture.Academic_Session_Id')
            ->join('Training_Lecture_Branch', 'Training_Lecture_Branch.Training_Lecture_Id', '=', 'Training_Lecture.Training_Lecture_Id')
            ->where('Training_Lecture_Branch.Branch_Id', '=', $BranchId)
            ->get();

        return view("student.lecture.index", ["lectures" => $lectures]);
    }

    public function viewLectureDetails($TrainingLectureId)
    {
        $lectureDetails = DB::Table('Training_Lecture')
            ->join('Academic_Session_Master', 'Academic_Session_Master.Academic_Session_Id', '=', 'Training_Lecture.Academic_Session_Id')
            ->where('Training_Lecture.Training_Lecture_Id', '=', $TrainingLectureId)
            ->first();

        $lectureBranches = DB::Table('Training_Lecture_Branch')
            ->join('Branch_Master', 'Branch_Master.Branch_Id', '=', 'Training_Lecture_Branch.Branch_Id')
            ->where('Training_Lecture_Branch.Training_Lecture_Id', '=', $TrainingLectureId)
            ->get();

        return view("student.lecture.view", ["lecture" => $lectureDetails, "lectureBranches" => $lectureBranches]);
    }
}
