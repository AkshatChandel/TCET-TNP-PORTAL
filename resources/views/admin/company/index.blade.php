@extends('admin.layout.admin_layout')

@section('main_content')
<div class="tables">
    <h2 class="title1">Companies</h2>
    <div class="bs-example widget-shadow" data-example-id="hoverable-table">

        <button type="button" onclick="create()" class="btn btn-primary btn-flat btn-pri btn-lg"><i class="fa fa-plus" aria-hidden="true"></i>Create</button>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Academic Session</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Rounds</th>
                    <th scope="col">Company Status</th>
                    <!-- <th scope="col"></th> -->
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @php
                $count = 0;
                @endphp

                @foreach($companies as $company)

                @php
                $count++;
                @endphp

                <tr>
                    <td>{{$count}}</td>
                    <td>{{$company->Academic_Session_Name}}</td>
                    <td>{{$company->Company_Name}}</td>
                    <td>{{$company->Number_Of_Rounds}}</td>
                    <td>{{$company->Company_Status}}</td>
                    <!-- <td><button type="button" onclick="edit('{{$company->Company_Id}}')">Edit</button></td> -->
                    <td><button type="button" class="btn btn-success" onclick="view('{{$company->Company_Id}}')">View</button></td>
                    <td><button type="button" class="btn btn-success" onclick="updateCompany('{{$company->Company_Id}}')">Update</button></td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function create() {
        window.location.href = "{{url('admin/company/create')}}";
    }

    function view(CompanyId) {
        window.location.href = "{{url('admin/company/view')}}" + "/" + CompanyId;
    }

    function updateCompany(CompanyId) {
        window.location.href = "{{url('admin/company/update')}}" + "/" + CompanyId;
    }

    // function edit(CompanyId) {
    //     window.location.href = "Edit.php?CompanyId=" + CompanyId;
    // }
</script>

@stop