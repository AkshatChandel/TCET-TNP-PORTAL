@extends('admin.layout.admin_layout')

@section('title', 'Message Draft | Create')

@section('main_content')
<div class="forms">
    <div class=" form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <h4>Messages</h4>
            </div>
            <div class="form-body">
                <form class="form-horizontal" action="create" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="txt_MessageDraftHead" class="col-sm-2 control-label">Message Draft Head</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_MessageDraftHead" name="Message_Draft_Head" placeholder="Message Draft Head" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_MessageContent" class="col-sm-2 control-label">Message Content</label>
                        <div class="col-sm-8"><textarea name="Message_Content" maxlength="2000" minlength="5" id="txt_MessageContent" rows="10" placeholder="Message Content" class="form-control"></textarea></div>
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
    function backToList() {
        window.location.href = "{{url('admin/message/')}}";
    }
</script>
@stop