@extends('admin.layout.admin_layout')

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
                            <input type="text" class="form-control" id="txt_CompanyName" name="Company_Name" placeholder="Company Name">
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

                    <hr color="grey">
                    <div class="my-4">
                        <h4>Company Criteria</h4>
                    </div>
                    <hr color="grey">

                    <div class="form-row">
                        <table class="table table-hover">
                            <thead class="table-dark">
                                <tr>
                                    <!-- <th>Sr. No.</th> -->
                                    <th>Company Criteria</th>
                                    <th>
                                        <button class="btn btn-primary mb-3" type="button" id="btn_CompanyCriteria_AddRow" onclick="addCompanyCriteriaRow()">+</button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="company-criteria-tbody"></tbody>
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
                                <tr>
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
                                    <td><input type='checkbox' name='Branch_Id[]' value='{{$branch->Branch_Id}}' /></td>
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
                                <tr>
                                    <th>Round</th>
                                    <th>Date Time</th>
                                    <th>Duration (in minutes)</th>
                                    <th>Status</th>
                                    <th><button class="btn btn-primary my-3" type="button" id="btn_AddCompanyRound" onclick="addCompanyRound()">+</button></th>
                                </tr>
                            </thead>
                            <tbody id="company-round-tbody"></tbody>
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
    function backToList() {
        window.location.href = "{{url('admin/academicsession/')}}";
    }

    function addCompanyCriteriaRow() {
        let html = "<tr><td><input type='text' class='form-control' name='Company_Criteria[]' required /></td>" +
            "<td><button type='button' class='btn btn-danger btn_CompanyCriteria_RemoveRow' onclick='removeCompanyCriteriaRow(this)'>-</button></td></tr>";
        $("#company-criteria-tbody").append(html);
    }

    function removeCompanyCriteriaRow(btn) {
        btn.parentNode.parentNode.remove();
    }

    addCompanyCriteriaRow();
    addCompanyCriteriaRow();
    addCompanyCriteriaRow();

    function addCompanyRound() {
        let html = "<tr><td><input type='text' class='form-control' name='Round_Name[]' required /></td><td><input type='datetime-local' class='form-control' name='Round_DateTime[]' required /></td><td><input type='number' class='form-control' name='Round_Duration[]' required /></td><td><select class='form-control' name='Round_Status[]'><option value='To be held'>To be held</option><option value='In Progress'>In Progress</option><option value='Completed'>Completed</option><option>Cancelled</option></select></td><td><button type='button' class='btn btn-danger btn_CompanyRound_RemoveRow' onclick='removeCompanyRoundRow(this)'>-</button></td></tr>";

        $("#company-round-tbody").append(html);
    }

    function removeCompanyRoundRow(btn) {
        btn.parentNode.parentNode.remove();
    }

    addCompanyRound();
    addCompanyRound();
    addCompanyRound();
</script>
@stop