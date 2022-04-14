@extends('student.layout.student_layout')

@section('title', 'TCET | Profile')

@section('main_content')
<div class="forms">
    <div class=" form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <h4>Student</h4>
            </div>
            <div class="form-body">
                <form class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label for="txt_FirstName" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_FirstName" value="{{$student->First_Name}}" readonly />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_MiddleName" class="col-sm-2 control-label">Middle Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_MiddleName" value="{{$student->Middle_Name}}" readonly />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_LastName" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_LastName" value="{{$student->Last_Name}}" readonly />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_DateOfBirth" class="col-sm-2 control-label">Date Of Birth</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="txt_DateOfBirth" value="{{$student->Date_Of_Birth}}" readonly />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_Gender" class="col-sm-2 control-label">Gender</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_Gender" value="{{$student->Gender}}" readonly />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_Contact" class="col-sm-2 control-label">Contact</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_Contact" value="{{$student->Contact_No}}" readonly />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_Email" class="col-sm-2 control-label">Email ID</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="txt_Email" value="{{$student->Email_Id}}" readonly />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_Address" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_Address" value="{{$student->Address}}" readonly />
                        </div>
                    </div>

                    <hr color="grey">
                    <div class="my-4">
                        <h4>Current Academic Details</h4>
                    </div>
                    <hr color="grey">

                    <div class="form-group">
                        <label for="txt_AcademicSession" class="col-sm-2 control-label">Academic Session</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_AcademicSession" value="{{$student->Academic_Session_Name}}" readonly />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_Branch" class="col-sm-2 control-label">Branch</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_Branch" value="{{$student->Branch_Name}}" readonly />
                        </div>
                    </div>

                    @if($student->Semester == 1 || $student->Semester == 2)
                    <div class="form-group">
                        <label for="txt_Year" class="col-sm-2 control-label">Year</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_Year" value="FE" readonly />
                        </div>
                    </div>
                    @elseif($student->Semester == 3 || $student->Semester == 4)
                    <div class="form-group">
                        <label for="txt_Year" class="col-sm-2 control-label">Year</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_Year" value="SE" readonly />
                        </div>
                    </div>
                    @elseif($student->Semester == 5 || $student->Semester == 6)
                    <div class="form-group">
                        <label for="txt_Year" class="col-sm-2 control-label">Year</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_Year" value="TE" readonly />
                        </div>
                    </div>
                    @elseif($student->Semester == 7 || $student->Semester == 8)
                    <div class="form-group">
                        <label for="txt_Year" class="col-sm-2 control-label">Year</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_Year" value="BE" readonly />
                        </div>
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="txt_CollegeId" class="col-sm-2 control-label">College ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_CollegeId" value="{{$student->Student_College_Id}}" readonly />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_RollNo" class="col-sm-2 control-label">Roll Number</label>
                        <div class="col-sm-9">
                            <input type="number" min="1" max="120" class="form-control" id="Roll_No" value="{{$student->Roll_No}}" readonly />
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
                            <input type="text" class="form-control" id="txt_10thPercentage" value="{{$student->Class_10_Percentage}}" readonly />
                        </div>
                    </div>
                    <div class="form-group class12-form-group">
                        <label for="txt_12thPercentage" class="col-sm-2 control-label">Class 12 Percentage</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_12thPercentage" value="{{$student->Class_12_Percentage}}" readonly />
                        </div>
                    </div>
                    <div class="form-group diploma-form-group">
                        <label for="txt_DiplomaPercentage" class="col-sm-2 control-label">Diploma Percentage</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_DiplomaPercentage" value="{{$student->Diploma_Percentage}}" readonly />
                        </div>
                    </div>
                    <div class="form-group class12-form-group">
                        <label for="txt_JEEScore" class="col-sm-2 control-label">JEE Score</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_JEEScore" value="{{$student->JEE_Marks}}" readonly />
                        </div>
                    </div>
                    <div class="form-group class12-form-group">
                        <label for="txt_JEEScoreOutOf" class="col-sm-2 control-label">JEE Score Out Of</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_JEEScoreOutOf" value="{{$student->JEE_Out_Of}}" readonly />
                        </div>
                    </div>
                    <div class="form-group class12-form-group">
                        <label for="txt_CETScore" class="col-sm-2 control-label">CET Score</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_CETScore" value="{{$student->CET_Marks}}" readonly />
                        </div>
                    </div>
                    <div class="form-group class12-form-group">
                        <label for="txt_CETScoreOutOf" class="col-sm-2 control-label">CET Score Out Of</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_CETScoreOutOf" value="{{$student->CET_Out_Of}}" readonly />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop