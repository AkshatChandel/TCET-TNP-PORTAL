@extends('admin.layout.admin_layout')

@section('main_content')
<div class="forms">
    <div class=" form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <h4>Designation</h4>
            </div>
            <div class="form-body">
                <form class="form-horizontal" action="{{ $designation->Designation_Id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="txt_DesignationName" class="col-sm-2 control-label">Designation Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $designation->Designation_Name }}" class="form-control" id="txt_DesignationName" name="Designation_Name" placeholder="Designation Name" required>
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
    let DesignationStatus = "{{ $designation->Designation_Status }}";

    let select_DesignationStatus = document.getElementById("select_DesignationStatus");
    let options_DesignationStatus = select_DesignationStatus.options;
    for (let j = 0, option; option = options_DesignationStatus[j]; j++) {
        if (option.value == DesignationStatus) {
            select_DesignationStatus.selectedIndex = j;
        }
    }
</script>

<script>
    function backToList() {
        window.location.href = "{{url('admin/designation/')}}";
    }
</script>
@stop