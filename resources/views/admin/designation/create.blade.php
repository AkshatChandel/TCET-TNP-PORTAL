@extends('admin.layout.admin_layout')

@section('main_content')
<div class="forms">
    <div class=" form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <h4>Designation</h4>
            </div>
            <div class="form-body">
                <form class="form-horizontal" action="create" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="txt_DesignationName" class="col-sm-2 control-label">Designation Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_DesignationName" name="Designation_Name" placeholder="Designation Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select_DesignationStatus" class="col-sm-2 control-label">Designation Status</label>
                        <div class="col-sm-9">
                            <select id="select_DesignationStatus" name="Designation_Status" class="form-control">
                                <option option="Active">Active</option>
                                <option option="De-Active">De-Active</option>
                            </select>
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
    function backToList() {
        window.location.href = "{{url('admin/designation/')}}";
    }
</script>
@stop