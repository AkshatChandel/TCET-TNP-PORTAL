@extends('admin.layout.admin_layout')

@section('main_content')
<div class="tables">
    <h2 class="title1">Branches</h2>
    <div class="bs-example widget-shadow" data-example-id="hoverable-table">

        <button type="button" onclick="create()" class="btn btn-primary btn-flat btn-pri btn-lg"><i class="fa fa-plus" aria-hidden="true"></i>Create</button>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Branch Name</th>
                    <th scope="col">Branch Code</th>
                    <th scope="col">Branch Status</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @php
                $count = 0;
                @endphp

                @foreach($Branches as $Branch)

                @php
                $count++;
                @endphp

                <tr>
                    <td>{{$count}}</td>
                    <td>{{$Branch->Branch_Name}}</td>
                    <td>{{$Branch->Branch_Code}}</td>
                    <td>{{$Branch->Branch_Status}}</td>
                    <td><button type="button" onclick="edit('{{$Branch->Branch_Id}}')">Edit</button></td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function create() {
        window.location.href = "{{url('admin/branch/create')}}";
    }

    function edit(BranchId) {
        window.location.href = "Edit.php?BranchId=" + BranchId;
    }
</script>

@stop