<?php

namespace App\Admin\Http\Controllers;

use App\Models\Academic_Session_Master;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcademicSessionController extends Controller
{
    public function index()
    {
        $data = Academic_Session_Master::all();
        return view("admin.academicsession.index", ["AcademicSessions" => $data]);
    }

    public function create()
    {
        return view("admin.academicsession.create");
    }

    public function createAcademicSession(Request $request)
    {
        $academic_session_master = new Academic_Session_Master;
        $academic_session_master->Academic_Session_Name = $request->Academic_Session_Name;
        $academic_session_master->Academic_Session_Status = $request->Academic_Session_Status;
        $academic_session_master->save();

        return redirect('/admin/academicsession/');
    }

    public function edit($AcademicSessionId)
    {
        $academicSession = DB::Table('Academic_Session_Master')
            ->where('Academic_Session_Master.Academic_Session_Id', '=', $AcademicSessionId)
            ->first();

        return view("admin.academicsession.edit", ["academicSession" => $academicSession]);
    }

    public function editAcademicSession($AcademicSessionId, Request $request)
    {
        $academic_session_master = Academic_Session_Master::find($AcademicSessionId);
        $academic_session_master->Academic_Session_Name = $request->Academic_Session_Name;
        $academic_session_master->Academic_Session_Status = $request->Academic_Session_Status;
        $academic_session_master->save();

        return redirect('/admin/academicsession/');
    }
}
