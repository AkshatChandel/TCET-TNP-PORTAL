@extends('admin.layout.admin_layout')

@section('main_content')

<div class="forms">
    <div class=" form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <h4>Messages</h4>
            </div>
            <div class="form-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="txt_MessageDraftHead" class="col-sm-2 control-label">Message Draft Head</label>
                        <div class="col-sm-9">
                            <input disabled type="text" value="{{$messageDraft->Message_Draft_Head}}" id="txt_MessageDraftHead" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_MessageContent" class="col-sm-2 control-label">Message Content</label>
                        <div class="col-sm-8">
                            <textarea disabled id="txt_MessageContent" rows="10" class="form-control">{{$messageDraft->Message_Content}}</textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@if($messageSentTo != null)

<div class="tables">
    <div class="bs-example widget-shadow" data-example-id="hoverable-table">
        <h2 class="title1">Message Sent To</h2>
        <hr />
        <div>
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="active">
                        <th scope="col">#</th>
                        <th scope="col">Academic Session</th>
                        <th scope="col">College ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Branch Name</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Roll No.</th>
                        <th scope="col">Message Status</th>
                    </tr>
                </thead>
                <tbody id="tbody_Students">

                    @php
                    $count = 0;
                    @endphp

                    @foreach($messageSentTo as $sent)

                    @php
                    $count++;
                    @endphp

                    <tr>
                        <td>{{$count}}</td>
                        <td>{{$sent->Academic_Session_Name}}</td>
                        <td>{{$sent->Student_College_Id}}</td>
                        <td>{{$sent->First_Name}} {{$sent->Middle_Name}} {{$sent->Last_Name}}</td>
                        <td>{{$sent->Branch_Name}}</td>
                        <td>{{$sent->Semester}}</td>
                        <td>{{$sent->Roll_No}}</td>
                        <td>{{$sent->Message_Sent_Status}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endif

@stop