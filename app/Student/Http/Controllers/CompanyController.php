<?php

namespace App\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Company_Master;
use App\Models\Company_Branch;
use App\Models\Company_Criteria;
use App\Models\Company_Round;
use App\Models\Company_Student_Registration;
use App\Models\Company_Round_Student_Selected;
use App\Models\Company_Student_Hired;

class CompanyController extends Controller
{
    public function index(Request $request)
    {
        $StudentId = $request->session()->get('UserId');

        $student = DB::table('Student_Class')
            ->join('Branch_Master', 'Branch_Master.Branch_Id', '=', 'Student_Class.Branch_Id')
            ->where('Student_Class.Student_Id', '=', $StudentId)
            ->select('Student_Class.Student_Class_Id', 'Branch_Master.Branch_Id')
            ->get();

        $BranchId = $student[0]->Branch_Id;

        $companies = DB::Table('Company_Master')
            ->join('Company_Branch', 'Company_Branch.Company_Id', '=', 'Company_Master.Company_Id')
            ->join('Company_Round', 'Company_Round.Company_Id', '=', 'Company_Master.Company_Id')
            ->where('Company_Branch.Branch_Id', '=', $BranchId)
            // ->select('Company_Master.Company_Id', 'Company_Master.Company_Name', 'Company_Master.Company_Status', 'Company_Branch.Company_Branch_Id', 'Company_Branch.Branch_Id', 'COUNT(Company_Round.Company_Round_Id)')
            ->get();

        // return $companies;

        return view("student.company.index", ['companies' => $companies]);
    }
}
