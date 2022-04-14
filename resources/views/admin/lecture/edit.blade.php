@extends('admin.layout.admin_layout')

@section('title', 'Training Lecture | Edit')

@section('main_content')
<div class="forms">
    <div class=" form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <h4>Training Lecture</h4>
            </div>
            <div class="form-body">
                <form class="form-horizontal" action="{{ $lecture->Training_Lecture_Id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="txt_LectureName" class="col-sm-2 control-label">Lecture Topic</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $lecture->Lecture_Name }}" class="form-control" id="txt_LectureName" name="Lecture_Name" placeholder="Lecture Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_LectureDescription" class="col-sm-2 control-label">Lecture Description</label>
                        <div class="col-sm-8"><textarea name="Lecture_Description" maxlength="2000" minlength="0" id="txt_LectureDescription" rows="10" placeholder="Lecture Description" class="form-control">{{ $lecture->Lecture_Description }}</textarea></div>
                    </div>
                    <div class="form-group">
                        <label for="txt_LectureCode" class="col-sm-2 control-label">Lecture Code</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $lecture->Lecture_Code }}" class="form-control" id="txt_LectureCode" name="Lecture_Code" placeholder="Lecture Code">
                        </div>
                    </div>
                    @php

                    $dateTime = $lecture->Lecture_DateTime;
                    $date = substr($dateTime, 0, 10);
                    $time = substr($dateTime, 11);
                    $dateTimeValue = $date . "T" . $time;

                    @endphp
                    <div class="form-group">
                        <label for="txt_LectureDateTime" class="col-sm-2 control-label">Lecture Date Time</label>
                        <div class="col-sm-9">
                            <input type="datetime-local" value="{{$dateTimeValue}}" class="form-control" id="txt_LectureDateTime" name="Lecture_DateTime" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_LectureLink" class="col-sm-2 control-label">Lecture Link</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $lecture->Lecture_Link }}" class="form-control" id="txt_LectureLink" name="Lecture_Link" placeholder="Lecture Link">
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
                    <div class="form-group">
                        <label for="select_LectureStatus" class="col-sm-2 control-label">Lecture Status</label>
                        <div class="col-sm-9">
                            <select id="select_LectureStatus" name="Lecture_Status" class="form-control">
                                <option value="To be conducted">To be conducted</option>
                                <option value="Conducted">Conducted</option>
                                <option value="Cancelled">Cancelled</option>
                                <option value="De-Active">De-Active</option>
                            </select>
                        </div>
                    </div>

                    <hr color="grey">
                    <div class="my-4">
                        <h4>Branches</h4>
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
                                        <input type='checkbox' id='radio_LectureForBranchId_SelectAllBranches' />
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="lecture-branches-tbody">

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

                                    @if((App\Models\Training_Lecture_Branch::where('Branch_Id', '=', $branch->Branch_Id)->where('Training_Lecture_Id', '=', $lecture->Training_Lecture_Id)->first()) != null)
                                    <td><input type='checkbox' name='Branch_Id[]' value='{{$branch->Branch_Id}}' checked /></td>
                                    @else
                                    <td><input type='checkbox' name='Branch_Id[]' value='{{$branch->Branch_Id}}' /></td>
                                    @endif
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
    let AcademicSessionId = "{{ $lecture->Academic_Session_Id }}";

    let select_AcademicSessionId = document.getElementById("select_AcademicSessionId");
    let options_AcademicSessionId = select_AcademicSessionId.options;
    for (let j = 0, option; option = options_AcademicSessionId[j]; j++) {
        if (option.value == AcademicSessionId) {
            select_AcademicSessionId.selectedIndex = j;
        }
    }

    let LectureStatus = "{{ $lecture->Lecture_Status }}";

    let select_LectureStatus = document.getElementById("select_LectureStatus");
    let options_LectureStatus = select_LectureStatus.options;
    for (let j = 0, option; option = options_LectureStatus[j]; j++) {
        if (option.value == LectureStatus) {
            select_LectureStatus.selectedIndex = j;
        }
    }
</script>

<script>
    function backToList() {
        window.location.href = "{{url('admin/lecture/')}}";
    }
</script>
@stop