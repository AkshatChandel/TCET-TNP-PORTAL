<?php

namespace App\Admin\Http\Controllers;

use App\Models\Announcement;
use App\Models\Announcement_Branch;
use App\Models\Branch_Master;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = DB::Table('Announcement')
            ->join('Staff_Master', 'Staff_Master.Staff_Id', '=', 'Announcement.Staff_Id')
            ->get();

        return view("admin.announcement.index", ["announcements" => $announcements]);
    }

    public function create()
    {
        $branches = Branch_Master::where('Branch_Status', 'Active')->get();
        // $AcademicSessions = Academic_Session_Master::where('Academic_Session_Status', 'Active')->get();

        return view("admin.announcement.create", ["branches" => $branches]);
        // return view("admin.announcement.create", ["branches" => $branches, "AcademicSessions" => $AcademicSessions]);
    }

    public function createAnnouncement(Request $request)
    {
        $StaffId = $request->session()->get('UserId');

        $Branches = $request->Branch_Id;

        if ($Branches != null && count($Branches) != 0) {

            $announcement = new Announcement();
            $announcement->Announcement_Head = $request->Announcement_Head;
            $announcement->Announcement_Content = $request->Announcement_Content;
            $announcement->Staff_Id = $StaffId;
            $announcement->Announcement_Status = 'Active';
            $announcement->save();

            $AnnouncementId = $announcement->Announcement_Id;

            foreach ($Branches as $BranchId) {
                $announcement_branch = new Announcement_Branch();
                $announcement_branch->Announcement_Id = $AnnouncementId;
                $announcement_branch->Branch_Id = $BranchId;
                $announcement_branch->Announcement_Branch_Status = 'Active';
                $announcement_branch->save();
            }
        }

        return redirect("/admin/announcement/");
    }

    public function edit($AnnouncementId)
    {
        $announcement = DB::Table('Announcement')
            ->where('Announcement_Id', '=', $AnnouncementId)
            ->first();

        $announcementBranches = Announcement_Branch::where('Announcement_Id', '=', $AnnouncementId)->get();
        $branches = Branch_Master::where('Branch_Status', 'Active')->get();

        return view("admin.announcement.edit", ["announcement" => $announcement, "announcementBranches" => $announcementBranches, "branches" => $branches]);
    }

    public function editAnnouncement($AnnouncementId, Request $request)
    {
        $Branches = $request->Branch_Id;

        if ($Branches != null && count($Branches) != 0) {

            $announcement = Announcement::find($AnnouncementId);
            $announcement->Announcement_Head = $request->Announcement_Head;
            $announcement->Announcement_Content = $request->Announcement_Content;
            // $announcement->Staff_Id = $StaffId;
            $announcement->Announcement_Status = $request->Announcement_Status;
            $announcement->save();

            $deletedRows = Announcement_Branch::where('Announcement_Id', $AnnouncementId)->delete();

            foreach ($Branches as $BranchId) {
                $announcement_branch = new Announcement_Branch();
                $announcement_branch->Announcement_Id = $AnnouncementId;
                $announcement_branch->Branch_Id = $BranchId;
                $announcement_branch->Announcement_Branch_Status = 'Active';
                $announcement_branch->save();
            }
        }

        return redirect("/admin/announcement/");
    }

    public function viewAnnouncementDetails($AnnouncementId)
    {
        $announcement = DB::Table('Announcement')
            ->join('Staff_Master', 'Staff_Master.Staff_Id', '=', 'Announcement.Staff_Id')
            ->where('Announcement.Announcement_Id', '=', $AnnouncementId)
            ->first();

        $announcementBranches = DB::Table('Announcement_Branch')
            ->join('Branch_Master', 'Branch_Master.Branch_Id', '=', 'Announcement_Branch.Branch_Id')
            ->where('Announcement_Branch.Announcement_Id', '=', $AnnouncementId)
            ->get();

        return view("admin.announcement.view", ["announcement" => $announcement, "announcementBranches" => $announcementBranches]);
    }
}
