@extends('admin.layout.admin_layout')

@section('main_content')
<div class="forms">
    <div class=" form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <h4>Staff</h4>
            </div>
            <div class="form-body">
                <form class="form-horizontal" action="create" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="txt_FirstName" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_FirstName" name="First_Name" placeholder="First Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_MiddleName" class="col-sm-2 control-label">Middle Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_MiddleName" name="Middle_Name" placeholder="Middle Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_LastName" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_LastName" name="Last_Name" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_DateOfBirth" class="col-sm-2 control-label">Date Of Birth</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="txt_DateOfBirth" name="Date_Of_Birth" required>
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
                            <input type="text" class="form-control" id="txt_Contact" name="Contact_No" placeholder="Contact" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_Email" class="col-sm-2 control-label">Email ID</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="txt_Email" name="Email_Id" placeholder="Email ID" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_Address" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_Address" name="Address" placeholder="Address" required>
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
                            <input type="text" class="form-control" id="txt_CollegeId" name="Staff_College_Id" placeholder="College ID" required>
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
        window.location.href = "{{url('admin/staff/')}}";
    }
</script>
@stop