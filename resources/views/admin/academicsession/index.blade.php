@extends('admin.layout.admin_layout')

@section('main_content')
<div class="tables">
    <h2 class="title1">Academic Sessions</h2>
    <div class="bs-example widget-shadow" data-example-id="hoverable-table">

        <button type="button" onclick="create()" class="btn btn-primary btn-flat btn-pri btn-lg"><i class="fa fa-plus" aria-hidden="true"></i>Create</button>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Academic Session</th>
                    <th scope="col">Academic Session Status</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @php
                $count = 0;
                @endphp

                @foreach($AcademicSessions as $AcademicSession)

                @php
                $count++;
                @endphp

                <tr>
                    <td>{{$count}}</td>
                    <td>{{$AcademicSession->Academic_Session_Name}}</td>
                    <td>{{$AcademicSession->Academic_Session_Status}}</td>
                    <td><button type="button" onclick="edit('{{$AcademicSession->Academic_Session_Id}}')">Edit</button></td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function create() {
        window.location.href = "{{url('admin/academicsession/create')}}";
    }

    function edit(AcademicSessionId) {
        window.location.href = "Edit.php?AcademicSessionId=" + AcademicSessionId;
    }
</script>

@stop