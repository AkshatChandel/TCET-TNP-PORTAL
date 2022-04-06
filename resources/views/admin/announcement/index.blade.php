@extends('admin.layout.admin_layout')

@section('main_content')
<div class="tables">
    <h2 class="title1">Announcements</h2>
    <div class="bs-example widget-shadow" data-example-id="hoverable-table">

        <button type="button" onclick="create()" class="btn btn-primary btn-flat btn-pri btn-lg"><i class="fa fa-plus" aria-hidden="true"></i>Create</button>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Announcement Head</th>
                    <th scope="col">Staff</th>
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

                @foreach($announcements as $announcement)

                @php
                $count++;
                @endphp

                <tr>
                    <td>{{$count}}</td>
                    <td>{{$announcement->Announcement_Head}}</td>
                    <td>{{$announcement->First_Name . ' ' . $announcement->Middle_Name . ' ' . $announcement->Last_Name}}</td>
                    <td>{{$announcement->Announcement_Status}}</td>
                    <!-- <td><button type="button" onclick="edit('{{$announcement->Announcement_Id}}')">Edit</button></td> -->
                    <td><button type="button" class="btn btn-success" onclick="view('{{$announcement->Announcement_Id}}')">View</button></td>
                    <td><button type="button" class="btn btn-success" onclick="updateCompany('{{$announcement->Announcement_Id}}')">Update</button></td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function create() {
        window.location.href = "{{url('admin/announcement/create')}}";
    }

    function view(AnnouncementId) {
        window.location.href = "{{url('admin/announcement/view')}}" + "/" + AnnouncementId;
    }
</script>

@stop