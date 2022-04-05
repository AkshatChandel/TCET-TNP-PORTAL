@extends('student.layout.student_layout')

@section('main_content')
<div class="tables">
    <h2 class="title1">Messages</h2>
    <div class="bs-example widget-shadow" data-example-id="hoverable-table">
        <table class="table table-hover">
            <thead>
                <tr class='active'>
                    <th scope="col">#</th>
                    <th scope="col">Message Head</th>
                    <th scope="col">Staff</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @php
                $count = 0;
                @endphp

                @foreach($messages as $message)

                @php
                $count++;
                @endphp

                @if($message->Message_Sent_Status == "Sent")

                <tr class='warning'>
                    <td>{{$count}}</td>
                    <td>{{$message->Message_Draft_Head}}</td>
                    <td>{{$message->First_Name}} {{$message->Middle_Name}} {{$message->Last_Name}}</td>
                    <td>Not Read</td>
                    <td><button class="btn btn-success" type="button" onclick="view('{{$message->Message_Sent_Id}}')">View</button></td>
                </tr>

                @else

                <tr>
                    <td>{{$count}}</td>
                    <td>{{$message->Message_Draft_Head}}</td>
                    <td>{{$message->First_Name}} {{$message->Middle_Name}} {{$message->Last_Name}}</td>
                    <td>Read</td>
                    <td><button class="btn btn-success" type="button" onclick="view('{{$message->Message_Sent_Id}}')">View</button></td>
                </tr>

                @endif

                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function view(MessageSentId) {
        window.location.href = "{{url('student/message/view')}}" + "/" + MessageSentId;
    }
</script>

@stop