<?php

namespace App\Staff\Http\Controllers;

use App\Models\Training_Lecture;
use App\Models\Training_Lecture_Branch;
use App\Models\Academic_Session_Master;
use App\Models\Branch_Master;
use App\Models\Training_Lecture_Attendance;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        $lectures = DB::Table('Training_Lecture')
            // ->join('Training_Lecture_Branch', 'Training_Lecture_Branch.Training_Lecture_Id', '=', 'Training_Lecture.Training_Lecture_Id')
            ->join('Academic_Session_Master', 'Academic_Session_Master.Academic_Session_Id', '=', 'Training_Lecture.Academic_Session_Id')
            // ->join('Branch_Master', 'Branch_Master.Branch_Id', '=', 'Training_Lecture_Branch.Branch_Id')
            ->get();

        return view("staff.lecture.index", ["lectures" => $lectures]);
    }

    public function create()
    {
        $branches = Branch_Master::where('Branch_Status', 'Active')->get();
        $AcademicSessions = Academic_Session_Master::where('Academic_Session_Status', 'Active')->get();
        return view("staff.lecture.create", ["branches" => $branches, "AcademicSessions" => $AcademicSessions]);
    }

    public function createLecture(Request $request)
    {
        $Branches = $request->Branch_Id;

        if ($Branches != null && count($Branches) != 0) {
            $training_lecture = new Training_Lecture();
            $training_lecture->Lecture_Name = $request->Lecture_Name;
            $training_lecture->Lecture_Description = $request->Lecture_Description;
            $training_lecture->Lecture_Code = $request->Lecture_Code;
            $training_lecture->Lecture_DateTime = $request->Lecture_DateTime;
            $training_lecture->Lecture_Link = $request->Lecture_Link;
            $training_lecture->Academic_Session_Id = $request->Academic_Session_Id;
            $training_lecture->Lecture_Status = $request->Lecture_Status;
            $training_lecture->save();

            $TrainingLectureId = $training_lecture->id;

            foreach ($Branches as $BranchId) {
                $training_lecture_branch = new Training_Lecture_Branch;
                $training_lecture_branch->Training_Lecture_Id = $TrainingLectureId;
                $training_lecture_branch->Branch_Id = $BranchId;
                $training_lecture_branch->save();
            }
        }

        return redirect("/staff/lecture/");
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

        return view("staff.lecture.view", ["lecture" => $lectureDetails, "lectureBranches" => $lectureBranches]);
    }
}
