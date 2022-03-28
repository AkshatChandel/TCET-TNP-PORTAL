@extends('admin.layout.admin_layout')

@section('main_content')

<div class="tables">
    <h2 class="title1">Quizzes</h2>
    <div class="bs-example widget-shadow" data-example-id="hoverable-table">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Score</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                @php
                $count = 0;
                $score = 0;
                $srno = 0;
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
                $srno++;
                @endphp

                <tr>
                    <td>{{$srno}}</td>
                    <td>{{$student->First_Name}}</td>
                    <td>{{$score}} / {{ count($quizCorrectAnswers) }}</td>
                    <td><button type="button" onclick="checkQuizOptions('{{$student->Student_Class_Id}}', '{{$quizData[0]->Quiz_Id}}')">Check Answers</button></td>
                </tr>

                @endif

                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>

    function checkQuizOptions(StudentClassId, QuizId){
        window.location.href = "{{url('admin/quiz/checkquizoptions/')}}" + "/" + QuizId + "?studentclassid=" + StudentClassId;
    }

</script>

@stop