@extends('admin.layout.admin_layout')

@section('main_content')
<div class="tables">
    <h2 class="title1">Staff</h2>
    <div class="bs-example widget-shadow" data-example-id="hoverable-table">
        <!-- <h4 class="title">Students</h4> -->

        <button type="button" onclick="create()" class="btn btn-primary btn-flat btn-pri btn-lg"><i class="fa fa-plus" aria-hidden="true"></i>Create</button>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">College ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Branch</th>
                    <th scope="col">Contact</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($staffs as $staff)

                <tr>
                    <td>{{$staff->Staff_College_Id}}</td>
                    <td>{{$staff->First_Name . " " . $staff->Middle_Name . " " . $staff->Last_Name}}</td>
                    <td>{{$staff->Designation_Name}}</td>
                    <td>{{$staff->Branch_Name}}</td>
                    <td>{{$staff->Contact_No}}</td>
                    <td><a href="{{ url('admin/staff/edit/' . $staff->Staff_Id) }}"><i class="fa fa-edit"></i></a></td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function create() {
        window.location.href = "{{url('admin/staff/create')}}";
    }
</script>

@stop