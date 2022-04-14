@extends('admin.layout.admin_layout')

@section('title', 'Announcement | ' . $announcement->Announcement_Head)

@section('main_content')
<div class="forms">
    <div class=" form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <h4>Announcements</h4>
            </div>
            <div class="form-body">
                <form class="form-horizontal" action="create" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="txt_AnnouncementHead" class="col-sm-2 control-label">Announcement Head</label>
                        <div class="col-sm-9">
                            <input disabled type="text" class="form-control" id="txt_AnnouncementHead" value="{{$announcement->Announcement_Head}}" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_AnnouncementContent" class="col-sm-2 control-label">Announcement Content</label>
                        <div class="col-sm-8"><textarea disabled id="txt_AnnouncementContent" rows="10" class="form-control">{{$announcement->Announcement_Content}}</textarea></div>
                    </div>

                    <hr />

                    <div class="form-row">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="table-dark">
                                <tr class="active">
                                    <th>#</th>
                                    <th>Branch</th>
                                    <th>Code</th>
                                </tr>
                            </thead>
                            <tbody id="announcement-branches-tbody">

                                @php
                                $count = 0;
                                @endphp

                                @foreach($announcementBranches as $announcementBranch)

                                @php
                                $count++;
                                @endphp

                                <tr>
                                    <td>{{$count}}</td>
                                    <td>{{$announcementBranch->Branch_Name}}</td>
                                    <td>{{$announcementBranch->Branch_Code}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </form>
                <input type="button" value="Back To List" onclick="backToList()" class="btn btn-primary" />
            </div>
        </div>
    </div>
</div>

<script>
    function backToList() {
        window.location.href = "{{url('admin/announcement/')}}";
    }
</script>
@stop