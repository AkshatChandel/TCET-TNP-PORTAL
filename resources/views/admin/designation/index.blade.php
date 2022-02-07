@extends('admin.layout.admin_layout')

@section('main_content')
<div class="tables">
    <h2 class="title1">Designations</h2>
    <div class="bs-example widget-shadow" data-example-id="hoverable-table">

        <button type="button" onclick="create()" class="btn btn-primary btn-flat btn-pri btn-lg"><i class="fa fa-plus" aria-hidden="true"></i>Create</button>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Designation Status</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @php
                $count = 0;
                @endphp

                @foreach($Designations as $Designation)

                @php
                $count++;
                @endphp

                <tr>
                    <td>{{$count}}</td>
                    <td>{{$Designation->Designation_Name}}</td>
                    <td>{{$Designation->Designation_Status}}</td>
                    <td><button type="button" onclick="edit('{{$Designation->Designation_Id}}')">Edit</button></td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function create() {
        window.location.href = "{{url('admin/designation/create')}}";
    }

    function edit(DesignationId) {
        window.location.href = "Edit.php?DesignationId=" + DesignationId;
    }
</script>

@stop