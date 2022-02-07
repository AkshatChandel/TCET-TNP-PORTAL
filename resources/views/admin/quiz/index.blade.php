@extends('admin.layout.admin_layout')

@section('main_content')
<div class="tables">
    <h2 class="title1">Quizzes</h2>
    <div class="bs-example widget-shadow" data-example-id="hoverable-table">

        <button type="button" onclick="create()" class="btn btn-primary btn-flat btn-pri btn-lg"><i class="fa fa-plus" aria-hidden="true"></i>Create</button>

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
                    <td><button type="button" onclick="edit('{{$quiz->Quiz_Id}}')">Edit</button></td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    function create() {
        window.location.href = "{{url('admin/quiz/create')}}";
    }

    function edit(QuizId) {
        window.location.href = "Edit.php?QuizId=" + QuizId;
    }
</script>

@stop