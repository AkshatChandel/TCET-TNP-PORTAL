@extends('staff.layout.staff_layout')

@section('title', 'TCET | Announcements')

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
                    <th scope="col">Status</th>
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
                    <td>
                        <a href="{{ url('staff/announcement/view/' . $announcement->Announcement_Id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"><i class="fa fa-eye"></i></a>
                        @if($announcement->Staff_Id == $StaffId)
                        <a href="{{ url('staff/announcement/edit/' . $announcement->Announcement_Id) }}" data-toggle="tooltip" data-placement="left" title="" data-original-title="Edit"><i class="fa fa-edit"></i></a>
                        @endif
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function create() {
        window.location.href = "{{url('staff/announcement/create')}}";
    }

    function view(AnnouncementId) {
        window.location.href = "{{url('staff/announcement/view')}}" + "/" + AnnouncementId;
    }
</script>

@stop