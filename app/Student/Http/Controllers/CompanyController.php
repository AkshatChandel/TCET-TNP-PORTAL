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
use App\Models\Student_Class;

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

    public function viewCompanyDetails($CompanyId)
    {
        $companyDetails = $this->getCompanyDetails($CompanyId);
        return view("student.company.view", ['companyDetails' => $companyDetails[0], 'companyBranches' => $companyDetails[1], 'companyCriterias' => $companyDetails[2], 'companyRounds' => $companyDetails[3]]);
    }

    public function getCompanyDetails($CompanyId)
    {
        // $CompanyId = (int) $request->CompanyId;

        $company = DB::Table('Company_Master')
            ->where('Company_Master.Company_Id', '=', $CompanyId)
            ->get();

        $companyBranches = DB::Table('Company_Branch')
            ->join('Branch_Master', 'Branch_Master.Branch_Id', '=', 'Company_Branch.Branch_Id')
            ->where('Company_Branch.Company_Id', '=', $CompanyId)
            ->get();

        $companyCriterias = DB::Table('Company_Criteria')
            ->where('Company_Criteria.Company_Id', '=', $CompanyId)
            ->get();

        $companyRounds = DB::Table('Company_Round')
            ->where('Company_Round.Company_Id', '=', $CompanyId)
            ->get();

        return [$company[0], $companyBranches, $companyCriterias, $companyRounds];
    }

    public function registerForCompany(Request $request)
    {
        $CompanyId = (int) $request->CompanyId;

        $StudentId = session()->get('UserId');

        $StudentClass = Student_Class::select('Student_Class_Id')
            ->where('Student_Id', '=', $StudentId)
            ->where('Student_Class_Status', '=', 'Active')
            ->get();

        $StudentClassId = $StudentClass[0]->Student_Class_Id;

        $companyStudentRegistration = new Company_Student_Registration();
        $companyStudentRegistration->Company_Id = $CompanyId;
        $companyStudentRegistration->Student_Class_Id = $StudentClassId;
        $companyStudentRegistration->Company_Student_Registration_Status = "Approved";
        $companyStudentRegistration->save();

        return "success";
    }
}
