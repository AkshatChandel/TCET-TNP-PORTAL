@extends('admin.layout.admin_layout')

@section('main_content')
<div class="forms">
    <div class=" form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <h4>Training Lecture</h4>
            </div>
            <div class="form-body">
                <form class="form-horizontal" action="create" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="txt_LectureName" class="col-sm-2 control-label">Lecture Topic</label>
                        <div class="col-sm-9">
                            <input disabled type="text" class="form-control" id="txt_LectureName" value="{{$lecture->Lecture_Name}}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_LectureDescription" class="col-sm-2 control-label">Lecture Description</label>
                        <div class="col-sm-8"><textarea disabled id="txt_LectureDescription" class="form-control">{{$lecture->Lecture_Description}}</textarea></div>
                    </div>
                    <div class="form-group">
                        <label for="txt_LectureCode" class="col-sm-2 control-label">Lecture Code</label>
                        <div class="col-sm-9">
                            <input disabled type="text" class="form-control" id="txt_LectureCode" value="{{$lecture->Lecture_Code}}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_LectureDateTime" class="col-sm-2 control-label">Lecture Date Time</label>
                        <div class="col-sm-9">
                            <input disabled type="text" class="form-control" id="txt_LectureDateTime" value="{{$lecture->Lecture_DateTime}}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_LectureLink" class="col-sm-2 control-label">Lecture Link</label>
                        <div class="col-sm-9">
                            <input disabled type="text" class="form-control" id="txt_LectureLink" value="{{$lecture->Lecture_Link}}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_AcademicSession" class="col-sm-2 control-label">Academic Session</label>
                        <div class="col-sm-9">
                            <input disabled type="text" class="form-control" id="txt_AcademicSession" value="{{$lecture->Academic_Session_Name}}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_LectureStatus" class="col-sm-2 control-label">Lecture Status</label>
                        <div class="col-sm-9">
                            <input disabled type="text" class="form-control" id="txt_LectureStatus" value="{{$lecture->Lecture_Status}}" />
                        </div>
                    </div>

                    <hr />

                    <div class="form-row">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="table-dark">
                                <tr class="active">
                                    <th>#</th>
                                    <th>Branch</th>
                                    <th>Code</th>
                                </tr>
                            </thead>
                            <tbody id="lecture-branches-tbody">

                                @php
                                $count = 0;
                                @endphp

                                @foreach($lectureBranches as $lectureBranch)

                                @php
                                $count++;
                                @endphp

                                <tr>
                                    <td>{{$count}}</td>
                                    <td>{{$lectureBranch->Branch_Name}}</td>
                                    <td>{{$lectureBranch->Branch_Code}}</td>
                                </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
                <input type="button" value="Back To List" onclick="backToList()" class="btn btn-primary" />
            </div>
        </div>
    </div>
</div>

<script>
    function backToList() {
        window.location.href = "{{url('admin/lecture/')}}";
    }
</script>
@stop