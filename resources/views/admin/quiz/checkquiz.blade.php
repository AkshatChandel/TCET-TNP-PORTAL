@extends('admin.layout.admin_layout')

<!-- section('title', quiz->Quiz_Name . ' | ' . 'Result') -->

@section('main_content')

<div class="tables">
    <h2 class="title1">Quizzes</h2>
    <div class="bs-example widget-shadow" data-example-id="hoverable-table">

        <table class="table table-hover table-bordered">
            <thead>
                <tr class="active">
                    <th scope="col">#</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Score</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @if($quizCorrectAnswers != null && count($quizCorrectAnswers) != 0)

                @php
                $count = 0;
                $score = 0;
                $SrNo = 0;
                @endphp

                @foreach($studentsData as $student)

                @php
                $count++;
                @endphp

                @php

                $markedOption = $student->Quiz_Question_Option_Id;

                foreach($quizCorrectAnswers as $quizCorrectAnswer){
                if($markedOption == $quizCorrectAnswer->Quiz_Question_Option_Id){
                $score++;
                }
                }

                @endphp

                @if($count % count($quizCorrectAnswers) == 0)

                @php
                $SrNo++;
                @endphp

                <tr>
                    <td>{{$SrNo}}</td>
                    <td>{{$student->First_Name}}</td>
                    <td>{{$score}} / {{ count($quizCorrectAnswers) }}</td>
                    <td><button type="button" onclick="checkQuizOptions('{{$student->Student_Class_Id}}', '{{$quizData[0]->Quiz_Id}}')">Check Answers</button></td>
                </tr>

                @php
                $score = 0;
                @endphp

                @endif

                @endforeach

                @else

                <tr>
                    <td colspan="4">
                        <center>No data in the table</center>
                    </td>
                </tr>

                @endif
            </tbody>
        </table>
    </div>
</div>

<script>
    function checkQuizOptions(StudentClassId, QuizId) {
        window.location.href = "{{url('admin/quiz/checkquizoptions/')}}" + "/" + QuizId + "?studentclassid=" + StudentClassId;
    }
</script>

@stop