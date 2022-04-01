<?php

namespace App\Admin\Http\Controllers;

use App\Models\Message_Draft;
use App\Models\Message_Sent;
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
        return view("admin.message.create");
    }

    public function createMessageDraft(Request $request)
    {
        $StaffId = $request->session()->get('UserId');

        $message_draft = new Message_Draft;
        $message_draft->Message_Draft_Head = $request->Message_Draft_Head;
        $message_draft->Message_Content = $request->Message_Content;
        $message_draft->Staff_Id = $StaffId;
        $message_draft->save();

        return redirect("/admin/message/");
    }

    public function send($MessageDraftId)
    {
        $messageDraft = DB::Table('Message_Draft')
            ->where('Message_Draft.Message_Draft_Id', '=', $MessageDraftId)
            ->get();

        $academicSessions = DB::Table('Academic_Session_Master')
            ->where('Academic_Session_Master.Academic_Session_Status', '=', 'Active')
            ->get();

        $branches = DB::Table('Branch_Master')
            ->where('Branch_Master.Branch_Status', '=', 'Active')
            ->get();

        return view("admin.message.send_message", ["messageDraft" => $messageDraft[0], "academicSessions" => $academicSessions, "branches" => $branches]);
    }

    public function searchStudents(Request $request)
    {
        $AcademicSessionId = $request->AcademicSessionId;
        $BranchId = $request->BranchId;
        $Semester = $request->Semester;

        if ($Semester != 0) {
            $students = DB::Table('Student_Master')
                ->join('Student_Class', 'Student_Class.Student_Id', '=', 'Student_Master.Student_Id')
                ->join('Branch_Master', 'Branch_Master.Branch_Id', '=', 'Student_Class.Branch_Id')
                ->join('Academic_Session_Master', 'Academic_Session_Master.Academic_Session_Id', '=', 'Student_Class.Academic_Session_Id')
                ->where('Student_Master.Student_Status', '=', "Active")
                ->where('Student_Class.Student_Class_Status', '=', "Active")
                ->where('Student_Class.Academic_Session_Id', '=', $AcademicSessionId)
                ->where('Student_Class.Branch_Id', '=', $BranchId)
                ->where('Student_Class.Semester', '=', $Semester)
                ->get();
        } else {
            $students = DB::Table('Student_Master')
                ->join('Student_Class', 'Student_Class.Student_Id', '=', 'Student_Master.Student_Id')
                ->join('Branch_Master', 'Branch_Master.Branch_Id', '=', 'Student_Class.Branch_Id')
                ->join('Academic_Session_Master', 'Academic_Session_Master.Academic_Session_Id', '=', 'Student_Class.Academic_Session_Id')
                ->where('Student_Master.Student_Status', '=', "Active")
                ->where('Student_Class.Student_Class_Status', '=', "Active")
                ->where('Student_Class.Academic_Session_Id', '=', $AcademicSessionId)
                ->where('Student_Class.Branch_Id', '=', $BranchId)
                ->get();
        }

        return $students;
    }

    public function sendMessageTo(Request $request)
    {
        $MessageDraftId = $request->MessageDraftId;
        $Send_To = $request->Send_To;
        $UserId = $request->UserId;

        $messageSent = new Message_Sent();
        $messageSent->Message_Draft_Id = $MessageDraftId;
        $messageSent->Send_To = $Send_To;
        $messageSent->Person_Id = $UserId;
        $messageSent->Message_Sent_Status = "Sent";
        $messageSent->save();

        return "success";
    }
}
