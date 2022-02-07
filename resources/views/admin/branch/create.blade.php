@extends('admin.layout.admin_layout')

@section('main_content')
<div class="forms">
    <div class=" form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <h4>Branch</h4>
            </div>
            <div class="form-body">
                <form class="form-horizontal" action="create" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="txt_BranchName" class="col-sm-2 control-label">Branch Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_BranchName" name="Branch_Name" placeholder="Branch Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_BranchCode" class="col-sm-2 control-label">Branch Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_BranchCode" name="Branch_Code" placeholder="Branch Code">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select_BranchStatus" class="col-sm-2 control-label">Branch Status</label>
                        <div class="col-sm-9">
                            <select id="select_BranchStatus" name="Branch_Status" class="form-control">
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
        window.location.href = "{{url('admin/branch/')}}";
    }
</script>
@stop