@extends('admin.layout.admin_layout')

@section('title', 'Branch | Edit')

@section('main_content')
<div class="forms">
    <div class=" form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <h4>Branch</h4>
            </div>
            <div class="form-body">
                <form class="form-horizontal" action="{{ $branch->Branch_Id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="txt_BranchName" class="col-sm-2 control-label">Branch Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $branch->Branch_Name }}" class="form-control" id="txt_BranchName" name="Branch_Name" placeholder="Branch Name" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_BranchCode" class="col-sm-2 control-label">Branch Code</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $branch->Branch_Code }}" class="form-control" id="txt_BranchCode" name="Branch_Code" placeholder="Branch Code" required />
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
    let BranchStatus = "{{ $branch->Branch_Status }}";

    let select_BranchStatus = document.getElementById("select_BranchStatus");
    let options_BranchStatus = select_BranchStatus.options;
    for (let j = 0, option; option = options_BranchStatus[j]; j++) {
        if (option.value == BranchStatus) {
            select_BranchStatus.selectedIndex = j;
        }
    }
</script>

<script>
    function backToList() {
        window.location.href = "{{url('admin/branch/')}}";
    }
</script>
@stop