@extends('staff.layout.staff_layout')

@section('title', 'Company | ' . $companyDetails->Company_Name)

@section('main_content')
<div class="tables">
    <h2 class="title1">Company Details</h2>

    <div class="bs-example widget-shadow" data-example-id="hoverable-table">

        <div>
            <h3>Company Name: {{$companyDetails->Company_Name}}</h3>
        </div>

        <hr />

        <div>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="active">
                        <th scope="col">#</th>
                        <th scope="col">Branch Name</th>
                        <th scope="col">Branch Code</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                    $count = 0;
                    @endphp

                    @foreach($companyBranches as $branch)

                    @php
                    $count++;
                    @endphp

                    <tr>
                        <td>{{$count}}</td>
                        <td>{{$branch->Branch_Name}}</td>
                        <td>{{$branch->Branch_Code}}</td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

        <hr />

        <div>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="active">
                        <th scope="col">#</th>
                        <th scope="col">Company Criteria</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                    $count = 0;
                    @endphp

                    @foreach($companyCriterias as $criteria)

                    @php
                    $count++;
                    @endphp

                    <tr>
                        <td>{{$count}}</td>
                        <td>{{$criteria->Company_Criteria}}</td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

        @if($registeredStudents != null)
        <hr />
        <div>
            <h3>Registered Students</h3>
            <hr />
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="active">
                        <th scope="col">#</th>
                        <th scope="col">College ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Branch</th>
                        <th scope="col">Class 10 Percentage</th>
                        <th scope="col">Class 12 Percentage</th>
                        <th scope="col">Diploma Percentage</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                    $count = 0;
                    @endphp

                    @foreach($registeredStudents as $student)

                    @php
                    $count++;
                    @endphp

                    @if($student->Company_Student_Registration_Status == "Approved")

                    <tr id="tr_CompanyStudentRegistration{{$student->Company_Student_Registration_Id}}" class="success">
                        <td>{{$count}}</td>
                        <td>{{$student->Student_College_Id}}</td>
                        <td>{{$student->First_Name . " " . $student->Middle_Name . " " . $student->Last_Name}}</td>
                        <td>{{$student->Branch_Name}}</td>
                        <td>{{$student->Class_10_Percentage}}</td>
                        <td>{{$student->Class_12_Percentage}}</td>
                        <td>{{$student->Diploma_Percentage}}</td>
                        <td id="td_CompanyStudentRegistrationStatus{{$student->Company_Student_Registration_Id}}">{{$student->Company_Student_Registration_Status}}</td>
                    </tr>

                    @endif

                    @endforeach
                </tbody>
            </table>

            <div class="forms">
                <div class=" form-grids row form-grids-right">
                    <div class="widget-shadow " data-example-id="basic-forms">
                        <div class="form-title">
                            <h4>Promote Registered Students</h4>
                        </div>
                        <div class="form-body">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="select_promoteToRound" class="col-sm-3 control-label">Promote all registered students to</label>
                                    <div class="col-sm-4">
                                        <select id="select_promoteToRound" class="form-control">
                                            @foreach($companyRounds as $round)
                                            <option value="{{$round->Company_Round_Id}}">{{$round->Round_Name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="button" class="btn btn-success" onclick="promoteRegisteredStudentsToRound()">Promote</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <hr />

        <div>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="active">
                        <th scope="col">#</th>
                        <th scope="col">Company Rounds</th>
                        <th scope="col">Company Date Time</th>
                        <th scope="col">Company Duration</th>
                        <th scope="col">Company Status</th>
                    </tr>
                </thead>
                <tbody>

                    @php
                    $count = 0;
                    @endphp

                    @foreach($companyRounds as $round)

                    @php
                    $count++;
                    @endphp

                    <tr>
                        <td>{{$count}}</td>
                        <td>{{$round->Round_Name}}</td>
                        <td>{{$round->Round_DateTime}}</td>
                        <td>{{$round->Round_Duration}} minutes</td>
                        <td>{{$round->Round_Status}}</td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

        @if($companyRoundsStudentWiseData != null)

        <div>
            @for($i = 0; $i
            < count($companyRoundsStudentWiseData); $i++) <!-- <hr /> -->

            @if($companyRoundsStudentWiseData[$i] != null && count($companyRoundsStudentWiseData[$i]) != 0)

            <div class="forms">
                <div class=" form-grids row form-grids-right">
                    <div class="widget-shadow " data-example-id="basic-forms">
                        <div class="form-title">
                            <h4>{{$companyRoundsStudentWiseData[$i][0]->Round_Name}} Selected Students</h4>
                        </div>
                        <div class="form-body">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="select_promoteToRoundg" class="col-sm-3 control-label">Promote selected students to</label>
                                    <div class="col-sm-4">
                                        <select id="select_promoteToRoundFrom{{$companyRoundsStudentWiseData[$i][0]->Company_Round_Id}}" class="form-control">
                                            @foreach($companyRounds as $round)
                                            @if($round->Company_Round_Id > $companyRoundsStudentWiseData[$i][0]->Company_Round_Id)
                                            <option value="{{$round->Company_Round_Id}}">{{$round->Round_Name}}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="button" class="btn btn-success" onclick="promoteSelectedRoundStudents('{{$companyRoundsStudentWiseData[$i][0]->Company_Round_Id}}')">Promote</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr class="active">
                            <th scope="col">#</th>
                            <th scope="col">College ID</th>
                            <th scope="col">Student Name</th>
                            <th scope="col">Branch</th>
                            <th scope="col">Class 10 Percentage</th>
                            <th scope="col">Class 12 Percentage</th>
                            <th scope="col">Diploma Percentage</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>

                        @php
                        $count = 0;
                        @endphp

                        @foreach($companyRoundsStudentWiseData[$i] as $student)

                        @php
                        $count++;
                        @endphp

                        @if($student->Company_Round_Student_Selected_Status == "Selected")

                        <tr id="tr_CompanyRoundStudentSelected{{$student->Company_Round_Student_Selected_Id}}" class="success">
                            <td>{{$count}}</td>
                            <td>{{$student->Student_College_Id}}</td>
                            <td>{{$student->First_Name . " " . $student->Middle_Name . " " . $student->Last_Name}}</td>
                            <td>{{$student->Branch_Name}}</td>
                            <td>{{$student->Class_10_Percentage}}</td>
                            <td>{{$student->Class_12_Percentage}}</td>
                            <td>{{$student->Diploma_Percentage}}</td>
                            <td id="td_CompanyRoundStudentSelectedStatus{{$student->Company_Round_Student_Selected_Id}}">{{$student->Company_Round_Student_Selected_Status}}</td>
                            <td id="td_btn_CompanyRoundStudentSelected{{$student->Company_Round_Student_Selected_Id}}"><button id="btn_CompanyRoundStudentSelected{{$student->Company_Round_Student_Selected_Id}}" class="btn btn-danger" onclick="updateCompanyRoundStudentSelectedStatus('{{$student->Company_Round_Student_Selected_Id}}', 'Not Selected')">Reject</button></td>
                            <td id="td_btn_CompanyRoundStudentSelectedHire{{$student->Company_Round_Student_Selected_Id}}"><button id="btn_CompanyRoundStudentSelectedHire{{$student->Company_Round_Student_Selected_Id}}" class="btn btn-success" onclick="hireStudent('{{$student->Company_Round_Student_Selected_Id}}', 'Hired')">Hire</button></td>
                        </tr>

                        @elseif($student->Company_Round_Student_Selected_Status == "Not Selected")

                        <tr id="tr_CompanyRoundStudentSelected{{$student->Company_Round_Student_Selected_Id}}" class="danger">
                            <td>{{$count}}</td>
                            <td>{{$student->Student_College_Id}}</td>
                            <td>{{$student->First_Name . " " . $student->Middle_Name . " " . $student->Last_Name}}</td>
                            <td>{{$student->Branch_Name}}</td>
                            <td>{{$student->Class_10_Percentage}}</td>
                            <td>{{$student->Class_12_Percentage}}</td>
                            <td>{{$student->Diploma_Percentage}}</td>
                            <td id="td_CompanyRoundStudentSelectedStatus{{$student->Company_Round_Student_Selected_Id}}">{{$student->Company_Round_Student_Selected_Status}}</td>
                            <td id="td_btn_CompanyRoundStudentSelected{{$student->Company_Round_Student_Selected_Id}}"><button id="btn_CompanyRoundStudentSelected{{$student->Company_Round_Student_Selected_Id}}" class="btn btn-success" onclick="updateCompanyRoundStudentSelectedStatus('{{$student->Company_Round_Student_Selected_Id}}', 'Selected')">Select</button></td>
                            <td></td>
                        </tr>

                        @elseif($student->Company_Round_Student_Selected_Status == "Selected and Promoted")

                        <tr id="tr_CompanyRoundStudentSelected{{$student->Company_Round_Student_Selected_Id}}" class="warning">
                            <td>{{$count}}</td>
                            <td>{{$student->Student_College_Id}}</td>
                            <td>{{$student->First_Name . " " . $student->Middle_Name . " " . $student->Last_Name}}</td>
                            <td>{{$student->Branch_Name}}</td>
                            <td>{{$student->Class_10_Percentage}}</td>
                            <td>{{$student->Class_12_Percentage}}</td>
                            <td>{{$student->Diploma_Percentage}}</td>
                            <td id="td_CompanyRoundStudentSelectedStatus{{$student->Company_Round_Student_Selected_Id}}">{{$student->Company_Round_Student_Selected_Status}}</td>
                            <td id="td_btn_CompanyRoundStudentSelected{{$student->Company_Round_Student_Selected_Id}}"></td>
                            <td></td>
                        </tr>

                        @elseif($student->Company_Round_Student_Selected_Status == "Hired")

                        <tr id="tr_CompanyRoundStudentSelected{{$student->Company_Round_Student_Selected_Id}}" class="warning">
                            <td>{{$count}}</td>
                            <td>{{$student->Student_College_Id}}</td>
                            <td>{{$student->First_Name . " " . $student->Middle_Name . " " . $student->Last_Name}}</td>
                            <td>{{$student->Branch_Name}}</td>
                            <td>{{$student->Class_10_Percentage}}</td>
                            <td>{{$student->Class_12_Percentage}}</td>
                            <td>{{$student->Diploma_Percentage}}</td>
                            <td id="td_CompanyRoundStudentSelectedStatus{{$student->Company_Round_Student_Selected_Id}}">{{$student->Company_Round_Student_Selected_Status}}</td>
                            <td id="td_btn_CompanyRoundStudentSelected{{$student->Company_Round_Student_Selected_Id}}"></td>
                            <td></td>

                            @endif

                            @endforeach
                    </tbody>
                </table>
            </div>

            @endif

            @endfor
        </div>

        @endif

        @if($hiredStudents != null)
        <hr />
        <div>
            <h2>Hired Students</h2>
            <hr />
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="active">
                        <th scope="col">#</th>
                        <th scope="col">College ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Branch</th>
                        <th scope="col">Class 10 Percentage</th>
                        <th scope="col">Class 12 Percentage</th>
                        <th scope="col">Diploma Percentage</th>
                        <!-- <th scope="col">Status</th> -->
                        <!-- <th scope="col"></th> -->
                    </tr>
                </thead>
                <tbody>

                    @php
                    $count = 0;
                    @endphp

                    @foreach($hiredStudents as $student)

                    @php
                    $count++;
                    @endphp

                    <tr class="success">
                        <td>{{$count}}</td>
                        <td>{{$student->Student_College_Id}}</td>
                        <td>{{$student->First_Name . " " . $student->Middle_Name . " " . $student->Last_Name}}</td>
                        <td>{{$student->Branch_Name}}</td>
                        <td>{{$student->Class_10_Percentage}}</td>
                        <td>{{$student->Class_12_Percentage}}</td>
                        <td>{{$student->Diploma_Percentage}}</td>
                        <!-- <td></td>   -->
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>

        @endif
    </div>
</div>

<script>
    function promoteRegisteredStudentsToRound() {

        let CompanyRoundId = document.getElementById("select_promoteToRound").value;
        let data = @json($registeredStudents);

        for (let i = 0; i < data.length; i++) {

            let StudentClassId = data[i].Student_Class_Id;

            $.ajax({
                type: "GET",
                url: "{{url('/staff/company/promoteStudentTo/')}}",
                contentType: "application/json; charset=utf-8",
                datatype: "Json",
                data: {
                    CompanyRoundId: CompanyRoundId,
                    StudentClassId: StudentClassId
                },
                success: function(data) {
                    if (data == "success") {

                    }
                },
                error: function() {
                    alert("Unable to promote");
                }
            });
        }
    }

    function updateCompanyRoundStudentSelectedStatus(CompanyRoundStudentSelectedId, CompanyRoundStudentSelectedStatus) {

        CompanyRoundStudentSelectedId = parseInt(CompanyRoundStudentSelectedId);

        $.ajax({
            type: "GET",
            url: "{{url('/staff/company/updateCompanyRoundStudentSelectedStatus/')}}",
            contentType: "application/json; charset=utf-8",
            datatype: "Json",
            data: {
                CompanyRoundStudentSelectedId: CompanyRoundStudentSelectedId,
                CompanyRoundStudentSelectedStatus: CompanyRoundStudentSelectedStatus
            },
            success: function(data) {
                if (data == "success") {

                    let btnId = "btn_CompanyRoundStudentSelected" + CompanyRoundStudentSelectedId;
                    let tdBtnId = "td_btn_CompanyRoundStudentSelected" + CompanyRoundStudentSelectedId;
                    let tdStatusId = "td_CompanyRoundStudentSelectedStatus" + CompanyRoundStudentSelectedId;
                    let trId = "tr_CompanyRoundStudentSelected" + CompanyRoundStudentSelectedId;

                    let btn = document.getElementById(btnId);
                    let tdBtn = document.getElementById(tdBtnId);
                    let tdStatus = document.getElementById(tdStatusId);
                    let tr = document.getElementById(trId);

                    if (CompanyRoundStudentSelectedStatus == "Selected") {
                        $(btn).remove();
                        let html = `<button id="` + btnId + `" class="btn btn-danger" onclick="updateCompanyRoundStudentSelectedStatus('` + CompanyRoundStudentSelectedId + `', 'Not Selected')">Reject</button>`;
                        $(tdBtn).append(html);
                        tdStatus.innerHTML = "Selected";
                        tr.className = "success";
                    } else {
                        $(btn).remove();
                        let html = `<button id="` + btnId + `" class="btn btn-success" onclick="updateCompanyRoundStudentSelectedStatus('` + CompanyRoundStudentSelectedId + `', 'Selected')">Select</button>`;
                        $(tdBtn).append(html);
                        tdStatus.innerHTML = "Not Selected";
                        tr.className = "danger";
                    }
                }
            },
            error: function() {
                alert("Unable to update");
            }
        });
    }

    function promoteSelectedRoundStudents(FromCompanyRoundId) {

        FromCompanyRoundId = parseInt(FromCompanyRoundId);
        let selectRoundId = "select_promoteToRoundFrom" + FromCompanyRoundId;
        let ToCompanyRoundId = document.getElementById(selectRoundId).value;

        $.ajax({
            type: "GET",
            url: "{{url('/staff/company/promoteSelectedRoundStudents/')}}",
            contentType: "application/json; charset=utf-8",
            datatype: "Json",
            data: {
                FromCompanyRoundId: FromCompanyRoundId,
                ToCompanyRoundId: ToCompanyRoundId
            },
            success: function(data) {
                if (data == "success") {
                    location.reload();
                }
            },
            error: function() {
                alert("Unable to update");
            }
        });
    }

    function hireStudent(CompanyRoundStudentSelectedId) {

        CompanyRoundStudentSelectedId = parseInt(CompanyRoundStudentSelectedId);

        $.ajax({
            type: "GET",
            url: "{{url('/staff/company/hireStudent/')}}",
            contentType: "application/json; charset=utf-8",
            datatype: "Json",
            data: {
                CompanyRoundStudentSelectedId: CompanyRoundStudentSelectedId
            },
            success: function(data) {
                if (data == "success") {
                    location.reload();
                }
            },
            error: function() {
                alert("Unable to update data");
            }
        });
    }
</script>

@stop