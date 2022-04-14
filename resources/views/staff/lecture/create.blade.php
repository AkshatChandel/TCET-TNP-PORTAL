@extends('staff.layout.staff_layout')

@section('title', 'Training Lecture | Create')

@section('main_content')
<div class="forms">
    <div class=" form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <h4>Training Lecture</h4>
            </div>
            <div class="form-body">
                <form class="form-horizontal" action="" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="txt_LectureName" class="col-sm-2 control-label">Lecture Topic</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_LectureName" name="Lecture_Name" placeholder="Lecture Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_LectureDescription" class="col-sm-2 control-label">Lecture Description</label>
                        <div class="col-sm-8"><textarea name="Lecture_Description" maxlength="2000" minlength="0" id="txt_LectureDescription" rows="10" placeholder="Lecture Description" class="form-control"></textarea></div>
                    </div>
                    <div class="form-group">
                        <label for="txt_LectureCode" class="col-sm-2 control-label">Lecture Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_LectureCode" name="Lecture_Code" placeholder="Lecture Code">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_LectureDateTime" class="col-sm-2 control-label">Lecture Date Time</label>
                        <div class="col-sm-9">
                            <input type="datetime-local" class="form-control" id="txt_LectureDateTime" name="Lecture_DateTime" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_LectureLink" class="col-sm-2 control-label">Lecture Link</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_LectureLink" name="Lecture_Link" placeholder="Lecture Link">
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
                                    <td><input type='checkbox' name='Branch_Id[]' value='{{$branch->Branch_Id}}' /></td>
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
    function backToList() {
        window.location.href = "{{url('staff/lecture/')}}";
    }
</script>
@stop