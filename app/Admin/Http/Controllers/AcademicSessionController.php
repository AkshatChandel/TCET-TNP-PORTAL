<?php

namespace App\Admin\Http\Controllers;

use App\Models\Academic_Session_Master;
use Illuminate\Http\Request;

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
        $AcademicSession = new Academic_Session_Master;
        $AcademicSession->Academic_Session_Name = $request->Academic_Session_Name;
        $AcademicSession->Academic_Session_Status = $request->Academic_Session_Status;
        $AcademicSession->save();

        return redirect('/admin/academicsession/');
    }
}
