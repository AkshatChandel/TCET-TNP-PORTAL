@extends('admin.layout.admin_layout')

@section('main_content')
<div class="forms">
    <div class=" form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <h4>Student</h4>
            </div>
            <div class="form-body">
                <form class="form-horizontal" action="{{ $student->Student_Id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="txt_FirstName" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $student->First_Name }}" class="form-control" id="txt_FirstName" name="First_Name" placeholder="First Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_MiddleName" class="col-sm-2 control-label">Middle Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $student->Middle_Name }}" class="form-control" id="txt_MiddleName" name="Middle_Name" placeholder="Middle Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_LastName" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $student->Last_Name }}" class="form-control" id="txt_LastName" name="Last_Name" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_DateOfBirth" class="col-sm-2 control-label">Date Of Birth</label>
                        <div class="col-sm-9">
                            <input type="date" value="{{ $student->Date_Of_Birth }}" class="form-control" id="txt_DateOfBirth" name="Date_Of_Birth" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select_Gender" class="col-sm-2 control-label">Gender</label>
                        <div class="col-sm-9">
                            <select id="select_Gender" name="Gender" class="form-control">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_Contact" class="col-sm-2 control-label">Contact</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $student->Contact_No }}" class="form-control" id="txt_Contact" name="Contact_No" placeholder="Contact" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_Email" class="col-sm-2 control-label">Email ID</label>
                        <div class="col-sm-9">
                            <input type="email" value="{{ $student->Email_Id }}" class="form-control" id="txt_Email" name="Email_Id" placeholder="Email ID" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_Address" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $student->Address }}" class="form-control" id="txt_Address" name="Address" placeholder="Address" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select_StudentStatus" class="col-sm-2 control-label">Student Status</label>
                        <div class="col-sm-9">
                            <select id="select_StudentStatus" name="Student_Status" class="form-control">
                                <option value="Active">Active</option>
                                <option value="De-Active">De-Active</option>
                            </select>
                        </div>
                    </div>

                    <hr color="grey">
                    <div class="my-4">
                        <h4>Previous Academic Details</h4>
                    </div>
                    <hr color="grey">

                    <div class="form-group">
                        <label for="txt_10thPercentage" class="col-sm-2 control-label">Class 10 Percentage</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $student->Class_10_Percentage }}" class="form-control" id="txt_10thPercentage" name="Class_10_Percentage" placeholder="Class 10 Percentage" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select_IsDiplomaStudent" class="col-sm-2 control-label">Are you a Diploma Student?</label>
                        <div class="col-sm-9">
                            <select id="select_IsDiplomaStudent" name="From_Class12_Or_Diploma" class="form-control">
                                <option value="Class 12">No</option>
                                <option value="Diploma">Yes</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group class12-form-group">
                        <label for="txt_12thPercentage" class="col-sm-2 control-label">Class 12 Percentage</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $student->Class_12_Percentage }}" class="form-control" id="txt_12thPercentage" name="Class_12_Percentage" placeholder="Class 12 Percentage">
                        </div>
                    </div>
                    <div class="form-group diploma-form-group">
                        <label for="txt_DiplomaPercentage" class="col-sm-2 control-label">Diploma Percentage</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $student->Diploma_Percentage }}" class="form-control" id="txt_DiplomaPercentage" name="Diploma_Percentage" placeholder="Diploma Percentage">
                        </div>
                    </div>
                    <div class="form-group class12-form-group">
                        <label for="txt_JEEScore" class="col-sm-2 control-label">JEE Score</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $student->JEE_Marks }}" class="form-control" id="txt_JEEScore" name="JEE_Marks" placeholder="JEE Score">
                        </div>
                    </div>
                    <div class="form-group class12-form-group">
                        <label for="txt_JEEScoreOutOf" class="col-sm-2 control-label">JEE Score Out Of</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $student->JEE_Out_Of }}" class="form-control" id="txt_JEEScoreOutOf" name="JEE_Out_Of" placeholder="JEE Score Out Of">
                        </div>
                    </div>
                    <div class="form-group class12-form-group">
                        <label for="txt_CETScore" class="col-sm-2 control-label">CET Score</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $student->CET_Marks }}" class="form-control" id="txt_CETScore" name="CET_Marks" placeholder="CET Score">
                        </div>
                    </div>
                    <div class="form-group class12-form-group">
                        <label for="txt_CETScoreOutOf" class="col-sm-2 control-label">CET Score Out Of</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $student->CET_Out_Of }}" class="form-control" id="txt_CETScoreOutOf" name="CET_Out_Of" placeholder="CET Score Out Of">
                        </div>
                    </div>

                    <hr color="grey">
                    <div class="my-4">
                        <h4>New Academic Details</h4>
                    </div>
                    <hr color="grey">

                    <div class="form-group">
                        <label for="select_Academic_Session_Id" class="col-sm-2 control-label">Academic Session</label>
                        <div class="col-sm-9">
                            <select id="select_Academic_Session_Id" name="Academic_Session_Id" class="form-control">
                                @foreach($academicSessions as $academicSession)
                                <option value="{{$academicSession->Academic_Session_Id}}">{{$academicSession->Academic_Session_Name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select_Branch" class="col-sm-2 control-label">Branch</label>
                        <div class="col-sm-9">
                            <select id="select_Branch" name="Branch_Id" class="form-control">
                                @foreach($branches as $branch)
                                <option value="{{$branch->Branch_Id}}">{{$branch->Branch_Name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select_Year" class="col-sm-2 control-label">Year</label>
                        <div class="col-sm-9">
                            <select id="select_Year" name="Year" class="form-control">
                                <option value='0'>--Select--</option>
                                <option value='1'>FE</option>
                                <option value='2'>SE</option>
                                <option value='3'>TE</option>
                                <option value='4'>BE</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select_Semester" class="col-sm-2 control-label">Semester</label>
                        <div class="col-sm-9">
                            <select id="select_Semester" name="Semester" class="form-control">
                                <option value='0'>--Select--</option>
                                <option value='1'>Semester 1</option>
                                <option value='2'>Semester 2</option>
                                <option value='3'>Semester 3</option>
                                <option value='4'>Semester 4</option>
                                <option value='5'>Semester 5</option>
                                <option value='6'>Semester 6</option>
                                <option value='7'>Semester 7</option>
                                <option value='8'>Semester 8</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_CollegeId" class="col-sm-2 control-label">College ID</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $student->Student_College_Id }}" class="form-control" id="txt_CollegeId" name="Student_College_Id" placeholder="College ID" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_RollNo" class="col-sm-2 control-label">Roll Number</label>
                        <div class="col-sm-9">
                            <input type="number" value="{{ $student->Roll_No }}" min="1" max="120" class="form-control" id="Roll_No" name="Roll_No" placeholder="Roll Number" required>
                        </div>
                    </div>

                    <div class="col-sm-offset-2">
                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-warning">Reset</button>
                    </div>
                </form>
                <input type="button" value="Back To List" onclick="backToList()" class="btn btn-primary" />
            </div>
        </div>
    </div>
</div>

<script>
    let FromClass12OrDiploma = "{{ $student->From_Class12_Or_Diploma }}";
    let StudentStatus = "{{ $student->Student_Status }}";
    let AcademicSessionId = "{{ $student->Academic_Session_Id }}";
    let BranchId = "{{ $student->Branch_Id }}";
    let Semester = "{{ $student->Semester }}";

    let select_FromClass12OrDiploma = document.getElementById("select_IsDiplomaStudent");
    let options_FromClass12OrDiploma = select_FromClass12OrDiploma.options;
    for (let j = 0, option; option = options_FromClass12OrDiploma[j]; j++) {
        if (option.value == FromClass12OrDiploma) {
            select_FromClass12OrDiploma.selectedIndex = j;
        }
    }

    let select_StudentStatus = document.getElementById("select_StudentStatus");
    let options_StudentStatus = select_StudentStatus.options;
    for (let j = 0, option; option = options_StudentStatus[j]; j++) {
        if (option.value == StudentStatus) {
            select_StudentStatus.selectedIndex = j;
        }
    }

    let select_AcademicSessionId = document.getElementById("select_Academic_Session_Id");
    let options_AcademicSessionId = select_AcademicSessionId.options;
    for (let j = 0, option; option = options_AcademicSessionId[j]; j++) {
        if (option.value == AcademicSessionId) {
            select_AcademicSessionId.selectedIndex = j;
        }
    }

    let select_BranchId = document.getElementById("select_Branch");
    let options_BranchId = select_BranchId.options;
    for (let j = 0, option; option = options_BranchId[j]; j++) {
        if (option.value == BranchId) {
            select_BranchId.selectedIndex = j;
        }
    }

    let select_Semester = document.getElementById("select_Semester");
    let options_Semester = select_Semester.options;
    for (let j = 0, option; option = options_Semester[j]; j++) {
        if (option.value == Semester) {
            select_Semester.selectedIndex = j;
        }
    }

    let select_Year = document.getElementById("select_Year");
    if (Semester == 1 || Semester == 2) {
        select_Year.selectedIndex = 1;
    } else if (Semester == 3 || Semester == 4) {
        select_Year.selectedIndex = 2;
    } else if (Semester == 5 || Semester == 6) {
        select_Year.selectedIndex = 3;
    } else if (Semester == 7 || Semester == 8) {
        select_Year.selectedIndex = 4;
    } else {
        select_Year.selectedIndex = 0;
    }
</script>

<script>
    function backToList() {
        window.location.href = "{{url('admin/student/')}}";
    }
</script>
@stop