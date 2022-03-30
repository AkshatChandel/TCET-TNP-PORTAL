<?php

namespace App\Admin\Http\Controllers;

use App\Models\Branch_Master;
use App\Models\Company_Branch;
use App\Models\Company_Master;
use App\Models\Company_Criteria;
use App\Models\Company_Round;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function index()
    {
        $data = DB::table('Company_Master')
            ->join('Company_Round', 'Company_Round.Company_Id', '=', 'Company_Master.Company_Id')
            ->select(DB::raw('Company_Master.Company_Id, Company_Master.Company_Name, COUNT(Round_Name) as Number_Of_Rounds, Company_Status'))
            ->groupBy('Company_Master.Company_Id', 'Company_Master.Company_Name', 'Company_Master.Company_Status')
            ->get();

        return view("admin.company.index", ["companies" => $data]);
    }

    public function create()
    {
        $branches = Branch_Master::where('Branch_Status', 'Active')->get();
        return view("admin.company.create", ["branches" => $branches]);
    }

    public function createCompany(Request $request)
    {
        $company_master = new Company_Master;
        $company_master->Company_Name = $request->Company_Name;
        $company_master->Company_Status = $request->Company_Status;
        $company_master->save();

        $CompanyId = $company_master->id;

        $CompanyCriterias = $request->Company_Criteria;
        $Branches = $request->Branch_Id;
        $Rounds = $request->Round_Name;
        $Round_DateTimes = $request->Round_DateTime;
        $Round_Durations = $request->Round_Duration;
        $Round_Statuses = $request->Round_Status;

        foreach ($CompanyCriterias as $CompanyCriteria) {
            $company_criteria = new Company_Criteria;
            $company_criteria->Company_Id = $CompanyId;
            $company_criteria->Company_Criteria = $CompanyCriteria;
            $company_criteria->save();
        }

        foreach ($Branches as $BranchId) {
            $company_branch = new Company_Branch;
            $company_branch->Company_Id = $CompanyId;
            $company_branch->Branch_Id = $BranchId;
            $company_branch->save();
        }

        for ($i = 0; $i < count($Rounds); $i++) {
            $company_round = new Company_Round;
            $company_round->Company_Id = $CompanyId;
            $company_round->Round_Name = $Rounds[$i];
            $company_round->Round_DateTime = $Round_DateTimes[$i];
            $company_round->Round_Duration = $Round_Durations[$i];
            $company_round->Round_Status = $Round_Statuses[$i];
            $company_round->save();
        }

        return redirect("/admin/company/");
    }

    public function viewCompanyDetails($CompanyId)
    {
        $companyDetails = $this->getCompanyDetails($CompanyId);
        return view("admin.company.view", ['companyDetails' => $companyDetails[0], 'companyBranches' => $companyDetails[1], 'companyCriterias' => $companyDetails[2], 'companyRounds' => $companyDetails[3]]);
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
}
