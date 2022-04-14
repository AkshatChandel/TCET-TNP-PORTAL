@extends('staff.layout.staff_layout')

@section('title', 'TCET | Messages')

@section('main_content')
<div class="tables">
    <h2 class="title1">Message Drafts</h2>
    <div class="bs-example widget-shadow" data-example-id="hoverable-table">

        <button type="button" onclick="create()" class="btn btn-primary btn-flat btn-pri btn-lg"><i class="fa fa-plus" aria-hidden="true"></i>Create</button>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Message Draft Head</th>
                    <!-- <th scope="col">Sent To (No. of students)</th> -->
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @php
                $count = 0;
                @endphp

                @foreach($messageDrafts as $messageDraft)

                @php
                $count++;
                @endphp

                <tr>
                    <td>{{$count}}</td>
                    <td>{{$messageDraft->Message_Draft_Head}}</td>
                    <td>
                        <!-- <a href="{{ url('staff/student/edit/' . $messageDraft->Message_Draft_Id) }}" data-toggle="tooltip" data-placement="left" title="" data-original-title="Edit"><i class="fa fa-edit"></i></a> -->
                        <a href="{{ url('staff/message/view/' . $messageDraft->Message_Draft_Id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"><i class="fa fa-eye"></i></a>
                        <a href="{{ url('staff/message/send/' . $messageDraft->Message_Draft_Id) }}" data-toggle="tooltip" data-placement="right" title="" data-original-title="Send Message"><i class="fa fa-mail-forward"></i></a>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function create() {
        window.location.href = "{{url('staff/message/create')}}";
    }

    function view(MessageDraftId) {
        window.location.href = "{{url('staff/message/view')}}" + "/" + MessageDraftId;
    }

    function sendMessage(MessageDraftId) {
        window.location.href = "{{url('staff/message/send')}}" + "/" + MessageDraftId;
    }

    // function edit(CompanyId) {
    //     window.location.href = "Edit.php?CompanyId=" + CompanyId;
    // }
</script>

@stop