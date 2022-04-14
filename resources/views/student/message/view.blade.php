@extends('student.layout.student_layout')

@section('title', 'TCET | Message')

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
                        <label for="txt_MessageDraftHead" class="col-sm-2 control-label">Message Head</label>
                        <div class="col-sm-9">
                            <input disabled type="text" value="{{$message->Message_Draft_Head}}" id="txt_MessageDraftHead" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_MessageContent" class="col-sm-2 control-label">Message Content</label>
                        <div class="col-sm-8">
                            <textarea disabled id="txt_MessageContent" rows="10" class="form-control">{{$message->Message_Content}}</textarea>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@stop