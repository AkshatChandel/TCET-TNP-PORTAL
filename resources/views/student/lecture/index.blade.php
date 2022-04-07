@extends('student.layout.student_layout')

@section('main_content')
<div class="tables">
    <h2 class="title1">Training Lectures</h2>
    <div class="bs-example widget-shadow" data-example-id="hoverable-table">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Topic</th>
                    <th scope="col">Code</th>
                    <th scope="col">Date Time</th>
                    <th scope="col">Academic Session</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @php
                $count = 0;
                @endphp

                @foreach($lectures as $lecture)

                @php
                $count++;
                @endphp

                <tr>
                    <td>{{$count}}</td>
                    <td>{{$lecture->Lecture_Name}}</td>
                    <td>{{$lecture->Lecture_Code}}</td>
                    <td>{{$lecture->Lecture_DateTime}}</td>
                    <td>{{$lecture->Academic_Session_Name}}</td>
                    <td>{{$lecture->Lecture_Status}}</td>
                    <td><button type="button" onclick="edit('{{$lecture->Training_Lecture_Id}}')">Edit</button></td>
                    <td><button type="button" onclick="view('{{$lecture->Training_Lecture_Id}}')">View</button></td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function view(TrainingLectureId) {
        window.location.href = "{{url('student/lecture/view/')}}" + "/" + TrainingLectureId;
    }
</script>

@stop