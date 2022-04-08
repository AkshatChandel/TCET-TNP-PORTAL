@extends('admin.layout.admin_layout')

@section('main_content')
<div class="forms">
    <div class=" form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <h4>Staff</h4>
            </div>
            <div class="form-body">
                <form class="form-horizontal" action="{{ $staff->Staff_Id }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="txt_FirstName" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $staff->First_Name }}" class="form-control" id="txt_FirstName" name="First_Name" placeholder="First Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_MiddleName" class="col-sm-2 control-label">Middle Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $staff->Middle_Name }}" class="form-control" id="txt_MiddleName" name="Middle_Name" placeholder="Middle Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_LastName" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $staff->Last_Name }}" class="form-control" id="txt_LastName" name="Last_Name" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_DateOfBirth" class="col-sm-2 control-label">Date Of Birth</label>
                        <div class="col-sm-9">
                            <input type="date" value="{{ $staff->Date_Of_Birth }}" class="form-control" id="txt_DateOfBirth" name="Date_Of_Birth" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select_Gender" class="col-sm-2 control-label">Gender</label>
                        <div class="col-sm-9">
                            <select id="select_Gender" name="Gender" class="form-control">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_Contact" class="col-sm-2 control-label">Contact</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $staff->Contact_No }}" class="form-control" id="txt_Contact" name="Contact_No" placeholder="Contact" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_Email" class="col-sm-2 control-label">Email ID</label>
                        <div class="col-sm-9">
                            <input type="email" value="{{ $staff->Email_Id }}" class="form-control" id="txt_Email" name="Email_Id" placeholder="Email ID" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_Address" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $staff->Address }}" class="form-control" id="txt_Address" name="Address" placeholder="Address" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select_StaffStatus" class="col-sm-2 control-label">Staff Status</label>
                        <div class="col-sm-9">
                            <select id="select_StaffStatus" name="Staff_Status" class="form-control">
                                <option value="Active">Active</option>
                                <option value="De-Active">De-Active</option>
                            </select>
                        </div>
                    </div>

                    <hr color="grey">
                    <div class="my-4">
                        <h4>Academic Details</h4>
                    </div>
                    <hr color="grey">

                    <div class="form-group">
                        <label for="select_Branch" class="col-sm-2 control-label">Branch</label>
                        <div class="col-sm-9">
                            <select id="select_Branch" name="Branch_Id" class="form-control">
                                @foreach($branches as $branch)
                                <option value="{{$branch->Branch_Id}}">{{$branch->Branch_Name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select_Designation" class="col-sm-2 control-label">Designation</label>
                        <div class="col-sm-9">
                            <select id="select_Designation" name="Designation_Id" class="form-control">
                                @foreach($designations as $designation)
                                <option value="{{$designation->Designation_Id}}">{{$designation->Designation_Name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group class12-form-group">
                        <label for="txt_CollegeId" class="col-sm-2 control-label">College ID</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{ $staff->Staff_College_Id }}" class="form-control" id="txt_CollegeId" name="Staff_College_Id" placeholder="College ID" required>
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
    let StaffStatus = "{{ $staff->Staff_Status }}";
    let BranchId = "{{ $staff->Branch_Id }}";
    let DesignationId = "{{ $staff->Designation_Id }}";

    let select_StaffStatus = document.getElementById("select_StaffStatus");
    let options_StaffStatus = select_StaffStatus.options;
    for (let j = 0, option; option = options_StaffStatus[j]; j++) {
        if (option.value == StaffStatus) {
            select_StaffStatus.selectedIndex = j;
        }
    }

    let select_BranchId = document.getElementById("select_Branch");
    let options_BranchId = select_BranchId.options;
    for (let j = 0, option; option = options_BranchId[j]; j++) {
        if (option.value == BranchId) {
            select_BranchId.selectedIndex = j;
        }
    }

    let select_DesignationId = document.getElementById("select_Designation");
    let options_DesignationId = select_DesignationId.options;
    for (let j = 0, option; option = options_DesignationId[j]; j++) {
        if (option.value == DesignationId) {
            select_DesignationId.selectedIndex = j;
        }
    }
</script>

<script>
    function backToList() {
        window.location.href = "{{url('admin/staff/')}}";
    }
</script>
@stop