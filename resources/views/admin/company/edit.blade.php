@extends('admin.layout.admin_layout')

@section('title', 'Company | ' . $company->Company_Name)

@section('main_content')
<div class="forms">
    <div class=" form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <h4>Company</h4>
            </div>
            <div class="form-body">
                <form class="form-horizontal" action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="txt_SessionName" class="col-sm-2 control-label">Company Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{$company->Company_Name}}" class="form-control" id="txt_CompanyName" name="Company_Name" placeholder="Company Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select_CompanyStatus" class="col-sm-2 control-label">Company Status</label>
                        <div class="col-sm-9">
                            <select id="select_CompanyStatus" name="Company_Status" class="form-control">
                                <option value="Active">Active</option>
                                <option value="De-Active">De-Active</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select_AcademicSessionId" class="col-sm-2 control-label">Academic Session</label>
                        <div class="col-sm-9">
                            <select id="select_AcademicSessionId" name="Academic_Session_Id" class="form-control">
                                @foreach($AcademicSessions as $AcademicSession)
                                <option value="{{$AcademicSession->Academic_Session_Id}}">{{$AcademicSession->Academic_Session_Name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <hr color="grey">
                    <div class="my-4">
                        <h4>Company Criteria</h4>
                    </div>
                    <hr color="grey">

                    <div class="form-row">
                        <table class="table table-hover">
                            <thead class="table-dark">
                                <tr class="active">
                                    <!-- <th>Sr. No.</th> -->
                                    <th>Company Criteria</th>
                                    <th>
                                        <button class="btn btn-primary mb-3" type="button" id="btn_CompanyCriteria_AddRow" onclick="addCompanyCriteriaRow()">+</button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="company-criteria-tbody">
                                @foreach($companyCriterias as $companyCriteria)
                                <tr>
                                    <td><input type='text' value="{{ $companyCriteria->Company_Criteria }}" class='form-control' name='Company_Criteria[]' required /></td>
                                    <td><button type='button' class='btn btn-danger btn_CompanyCriteria_RemoveRow' onclick='removeCompanyCriteriaRow(this)'>-</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <hr color="grey">
                    <div class="my-4">
                        <h4>Open For Branches</h4>
                    </div>
                    <hr color="grey">

                    <div class="form-row">
                        <table class="table table-striped table-hover">
                            <thead class="table-dark">
                                <tr class="active">
                                    <th>#</th>
                                    <th>Branch</th>
                                    <th>Code</th>
                                    <th>
                                        <input type='checkbox' id='radio_CompanyOpenForBranchId_SelectAllBranches' />
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="company-branches-tbody">

                                @php
                                $count = 0;
                                @endphp

                                @foreach($branches as $branch)

                                @php
                                $count++;
                                @endphp

                                <tr>
                                    <td>{{$count}}</td>
                                    <td>{{$branch->Branch_Name}}</td>
                                    <td>{{$branch->Branch_Code}}</td>

                                    @if((App\Models\Company_Branch::where('Branch_Id', '=', $branch->Branch_Id)->where('Company_Id', '=', $company->Company_Id)->first()) != null)
                                    <td><input type='checkbox' name='Branch_Id[]' value='{{$branch->Branch_Id}}' checked /></td>
                                    @else
                                    <td><input type='checkbox' name='Branch_Id[]' value='{{$branch->Branch_Id}}' /></td>
                                    @endif

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <hr color=" grey">
                    <div class="my-4">
                        <h4>Company Rounds</h4>
                    </div>
                    <hr color="grey">

                    <div class="form-row">
                        <table class="table table-hover">
                            <thead class="table-dark">
                                <tr class="active">
                                    <th>Round</th>
                                    <th>Date Time</th>
                                    <th>Duration (in minutes)</th>
                                    <th>Status</th>
                                    <th><button class="btn btn-primary my-3" type="button" id="btn_AddCompanyRound" onclick="addCompanyRound()">+</button></th>
                                </tr>
                            </thead>
                            <tbody id="company-round-tbody">
                                @foreach($companyRounds as $companyRound)
                                @php

                                $dateTime = $companyRound->Round_DateTime;
                                $date = substr($dateTime, 0, 10);
                                $time = substr($dateTime, 11);
                                $dateTimeValue = $date . "T" . $time;

                                @endphp
                                <tr>
                                    <td><input type='text' value='{{ $companyRound->Round_Name }}' class='form-control' name='Round_Name[]' required /></td>
                                    <td><input type='datetime-local' value={{$dateTimeValue}} class='form-control' name='Round_DateTime[]' required /></td>
                                    <td><input type='number' value='{{ $companyRound->Round_Duration }}' class='form-control' name='Round_Duration[]' required /></td>
                                    <td>
                                        <select class='form-control' name='Round_Status[]'>
                                            @if($companyRound->Round_Status == "To be held")
                                            <option value='To be held' selected>To be held</option>
                                            <option value='In Progress'>In Progress</option>
                                            <option value='Completed'>Completed</option>
                                            <option value='Cancelled'>Cancelled</option>
                                            @elseif($companyRound->Round_Status == "In Progress")
                                            <option value='To be held'>To be held</option>
                                            <option value='In Progress' selected>In Progress</option>
                                            <option value='Completed'>Completed</option>
                                            <option value='Cancelled'>Cancelled</option>
                                            @elseif($companyRound->Round_Status == "Completed")
                                            <option value='To be held'>To be held</option>
                                            <option value='In Progress'>In Progress</option>
                                            <option value='Completed' selected>Completed</option>
                                            <option value='Cancelled'>Cancelled</option>
                                            @elseif($companyRound->Round_Status == "Cancelled")
                                            <option value='To be held'>To be held</option>
                                            <option value='In Progress'>In Progress</option>
                                            <option value='Completed'>Completed</option>
                                            <option value='Cancelled' selected>Cancelled</option>
                                            @endif
                                        </select>
                                    </td>
                                    <td><button type='button' class='btn btn-danger btn_CompanyRound_RemoveRow' onclick='removeCompanyRoundRow(this)'>-</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <center>
                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                            <button type="reset" class="btn btn-warning">Reset</button>
                        </center>
                    </div>

                </form>
                <input type="button" value="Back To List" onclick="backToList()" class="btn btn-primary" />
            </div>
        </div>
    </div>
</div>

<script>
    let CompanyStatus = "{{ $company->Company_Status }}";

    let select_CompanyStatus = document.getElementById("select_CompanyStatus");
    let options_CompanyStatus = select_CompanyStatus.options;
    for (let j = 0, option; option = options_CompanyStatus[j]; j++) {
        if (option.value == CompanyStatus) {
            select_CompanyStatus.selectedIndex = j;
        }
    }

    let AcademicSessionId = "{{ $company->Academic_Session_Id }}";

    let select_AcademicSessionId = document.getElementById("select_AcademicSessionId");
    let options_AcademicSessionId = select_AcademicSessionId.options;
    for (let j = 0, option; option = options_AcademicSessionId[j]; j++) {
        if (option.value == AcademicSessionId) {
            select_AcademicSessionId.selectedIndex = j;
        }
    }
</script>

<script>
    function backToList() {
        window.location.href = "{{url('admin/company/')}}";
    }

    function addCompanyCriteriaRow() {
        let html = "<tr><td><input type='text' class='form-control' name='Company_Criteria[]' required /></td>" +
            "<td><button type='button' class='btn btn-danger btn_CompanyCriteria_RemoveRow' onclick='removeCompanyCriteriaRow(this)'>-</button></td></tr>";
        $("#company-criteria-tbody").append(html);
    }

    function removeCompanyCriteriaRow(btn) {
        btn.parentNode.parentNode.remove();
    }

    function addCompanyRound() {
        let html = "<tr><td><input type='text' class='form-control' name='Round_Name[]' required /></td><td><input type='datetime-local' class='form-control' name='Round_DateTime[]' required /></td><td><input type='number' class='form-control' name='Round_Duration[]' required /></td><td><select class='form-control' name='Round_Status[]'><option value='To be held'>To be held</option><option value='In Progress'>In Progress</option><option value='Completed'>Completed</option><option value='Cancelled'>Cancelled</option></select></td><td><button type='button' class='btn btn-danger btn_CompanyRound_RemoveRow' onclick='removeCompanyRoundRow(this)'>-</button></td></tr>";

        $("#company-round-tbody").append(html);
    }

    function removeCompanyRoundRow(btn) {
        btn.parentNode.parentNode.remove();
    }
</script>
@stop