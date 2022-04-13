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

                @foreach($branches as $branch)

                @php
                $count++;
                @endphp

                <tr>
                    <td>{{$count}}</td>
                    <td>{{$branch->Branch_Name}}</td>
                    <td>{{$branch->Branch_Code}}</td>
                    <td>{{$branch->Branch_Status}}</td>
                    <td><a href="{{ url('admin/branch/edit/' . $branch->Branch_Id) }}" data-toggle="tooltip" data-placement="left" title="" data-original-title="Edit"><i class="fa fa-edit"></i></a></td>
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