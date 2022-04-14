@extends('student.layout.student_layout')

@section('title', 'TCET | Quizzes')

@section('main_content')
<div class="tables">
    <h2 class="title1">Quizzes</h2>
    <div class="bs-example widget-shadow" data-example-id="hoverable-table">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Quiz Name</th>
                    <th scope="col">Quiz Code</th>
                    <th scope="col">Staff</th>
                    <th scope="col">Quiz Time</th>
                    <th scope="col">Quiz Duration (in minutes)</th>
                    <th scope="col">Quiz Status</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @php
                $count = 0;
                @endphp

                @foreach($quizzes as $quiz)

                @php
                $count++;
                @endphp

                <tr>
                    <td>{{$count}}</td>
                    <td>{{$quiz->Quiz_Name}}</td>
                    <td>{{$quiz->Quiz_Code}}</td>
                    <td>{{$quiz->First_Name . " " . $quiz->Middle_Name . " " . $quiz->Last_Name}}</td>
                    <td>{{$quiz->Quiz_Time}}</td>
                    <td>{{$quiz->Quiz_Duration}}</td>
                    <td>{{$quiz->Quiz_Status}}</td>

                    @if((App\Models\Student_Quiz::where('Quiz_Id', '=', $quiz->Quiz_Id)->where('Student_Class_Id', '=', $StudentClassId)->first()) != null)
                    <td></td>
                    @else
                    <td>
                        <a href="{{ url('student/quiz/attempt/' . $quiz->Quiz_Id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Attempt"><i class="fa fa-external-link"></i></a>
                    </td>
                    @endif
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop