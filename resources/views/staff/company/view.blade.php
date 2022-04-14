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

        @if($registeredStudents != null)
        <div>
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

                    @if($student->Company_Student_Registration_Status == "Rejected")

                    <tr id="tr_CompanyStudentRegistration{{$student->Company_Student_Registration_Id}}" class="danger">
                        <td>{{$count}}</td>
                        <td>{{$student->Student_College_Id}}</td>
                        <td>{{$student->First_Name . " " . $student->Middle_Name . " " . $student->Last_Name}}</td>
                        <td>{{$student->Branch_Name}}</td>
                        <td>{{$student->Class_10_Percentage}}</td>
                        <td>{{$student->Class_12_Percentage}}</td>
                        <td>{{$student->Diploma_Percentage}}</td>
                        <td id="td_CompanyStudentRegistrationStatus{{$student->Company_Student_Registration_Id}}">{{$student->Company_Student_Registration_Status}}</td>
                        <td><button type="button" id="btn_approveStudent{{$student->Company_Student_Registration_Id}}" onclick="approveStudent('{{$student->Company_Student_Registration_Id}}')" class="btn btn-success">Approve</button></td>
                    </tr>

                    @elseif($student->Company_Student_Registration_Status == "Approved")

                    <tr id="tr_CompanyStudentRegistration{{$student->Company_Student_Registration_Id}}" class="success">
                        <td>{{$count}}</td>
                        <td>{{$student->Student_College_Id}}</td>
                        <td>{{$student->First_Name . " " . $student->Middle_Name . " " . $student->Last_Name}}</td>
                        <td>{{$student->Branch_Name}}</td>
                        <td>{{$student->Class_10_Percentage}}</td>
                        <td>{{$student->Class_12_Percentage}}</td>
                        <td>{{$student->Diploma_Percentage}}</td>
                        <td id="td_CompanyStudentRegistrationStatus{{$student->Company_Student_Registration_Id}}">{{$student->Company_Student_Registration_Status}}</td>
                        <td><button type="button" id="btn_rejectStudent{{$student->Company_Student_Registration_Id}}" onclick="rejectStudent('{{$student->Company_Student_Registration_Id}}')" class="btn btn-danger">Reject</button></td>
                    </tr>

                    @endif

                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>

<script>
    function rejectStudent(CompanyStudentRegistrationId) {
        $.ajax({
            type: "GET",
            url: "{{url('/staff/company/updateCompanyStudentRegistrationStatus/')}}",
            contentType: "application/json; charset=utf-8",
            datatype: "Json",
            data: {
                CompanyStudentRegistrationId: CompanyStudentRegistrationId,
                CompanyStudentRegistrationStatus: "Rejected"
            },
            success: function(data) {
                if (data == "success") {

                    let rejectButtonId = "btn_rejectStudent" + CompanyStudentRegistrationId;
                    let btn_rejectButton = document.getElementById(rejectButtonId);

                    let td = btn_rejectButton.parentNode;

                    let approveButtonId = "btn_approveStudent" + CompanyStudentRegistrationId;

                    let html = `<button type="button" id="` + approveButtonId + `" onclick="approveStudent('` + CompanyStudentRegistrationId + `')" class="btn btn-success">Approve</button>`;

                    $(td).append(html);

                    $(btn_rejectButton).remove();

                    document.getElementById("td_CompanyStudentRegistrationStatus" + CompanyStudentRegistrationId).innerHTML = "Rejected";
                    document.getElementById("tr_CompanyStudentRegistration" + CompanyStudentRegistrationId).className = "danger";
                }
            },
            error: function() {
                alert("Unable to update");
            }
        });
    }

    function approveStudent(CompanyStudentRegistrationId) {
        $.ajax({
            type: "GET",
            url: "{{url('/staff/company/updateCompanyStudentRegistrationStatus/')}}",
            contentType: "application/json; charset=utf-8",
            datatype: "Json",
            data: {
                CompanyStudentRegistrationId: CompanyStudentRegistrationId,
                CompanyStudentRegistrationStatus: "Approved"
            },
            success: function(data) {
                if (data == "success") {

                    let approveButtonId = "btn_approveStudent" + CompanyStudentRegistrationId;
                    let btn_approveButton = document.getElementById(approveButtonId);

                    let td = btn_approveButton.parentNode;

                    let rejectButtonId = "btn_rejectStudent" + CompanyStudentRegistrationId;

                    let html = `<button type="button" id="` + rejectButtonId + `" onclick="rejectStudent('` + CompanyStudentRegistrationId + `')" class="btn btn-danger">Reject</button>`;

                    $(td).append(html);

                    $(btn_approveButton).remove();

                    document.getElementById("td_CompanyStudentRegistrationStatus" + CompanyStudentRegistrationId).innerHTML = "Approved";
                    document.getElementById("tr_CompanyStudentRegistration" + CompanyStudentRegistrationId).className = "success";
                }
            },
            error: function() {
                alert("Unable to update");
            }
        });
    }
</script>

@stop