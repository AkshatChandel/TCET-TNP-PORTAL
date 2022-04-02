@extends('admin.layout.admin_layout')

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
                                        <select id="select_promoteToRoundg" class="form-control">
                                            @foreach($companyRounds as $round)
                                            <option value="{{$round->Company_Round_Id}}">{{$round->Round_Name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="button" class="btn btn-success">Promote</button>
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
                            <td>{{$student->Company_Round_Student_Selected_Status}}</td>
                            <td><button class="btn btn-danger">Reject</button></td>
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
                            <td>{{$student->Company_Round_Student_Selected_Status}}</td>
                            <td><button class="btn btn-success">Select</button></td>
                        </tr>

                        @endif

                        @endforeach
                    </tbody>
                </table>
            </div>

            @endif

            @endfor
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
                url: "{{url('/admin/company/promoteStudentTo/')}}",
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
</script>

@stop