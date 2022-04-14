@extends('admin.layout.admin_layout')

@section('title', 'Announcement | Create')

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
                            <input type="text" class="form-control" id="txt_AnnouncementHead" name="Announcement_Head" placeholder="Announcement Head" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_AnnouncementContent" class="col-sm-2 control-label">Announcement Content</label>
                        <div class="col-sm-8"><textarea name="Announcement_Content" maxlength="2000" minlength="5" id="txt_AnnouncementContent" rows="10" placeholder="Announcement Content" class="form-control"></textarea></div>
                    </div>

                    <hr />

                    <div class="form-row">
                        <table class="table table-bordered table-striped table-hover">
                            <thead class="table-dark">
                                <tr class="active">
                                    <th>#</th>
                                    <th>Branch</th>
                                    <th>Code</th>
                                    <th>
                                        <!-- <input type='checkbox' id='radio_CompanyOpenForBranchId_SelectAllBranches' /> -->
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="announcement-branches-tbody">

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
                                    <td><input type='checkbox' name='Branch_Id[]' value='{{$branch->Branch_Id}}' /></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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
        window.location.href = "{{url('admin/announcement/')}}";
    }
</script>
@stop