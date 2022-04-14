@extends('student.layout.student_layout')

@section('title', 'Quiz | ' . $quiz->Quiz_Name)

@section('main_content')
<div class="forms">
    <div class=" form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <h4>Quiz - {{$quiz->Quiz_Name}} - {{$quiz->Quiz_Code}} - {{$quiz->First_Name . " " . $quiz->Last_Name}}</h4>
            </div>
            <div class="form-body">
                <form class="form-horizontal" action="../attempt" method="POST">
                    @csrf
                    <input type="hidden" name="QuizId" value="{{$quizQuestionsOptions[0]->Quiz_Id}}" />

                    @for ($i = 0; $i < count($quizQuestionsOptions); $i=$i + 4) <div class="col-md-12 panel-grids">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">{{ $quizQuestionsOptions[$i]->Quiz_Question }}</h3>
                            </div>
                            <div class="panel-body">

                                @php
                                $radioButtonName = "Question" . $quizQuestionsOptions[$i]->Quiz_Question_Id;

                                @endphp

                                @for($j = 0; $j < 4; $j++) <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input type="radio" name="{{ $radioButtonName }}" value="{{ $quizQuestionsOptions[$i + $j]->Quiz_Question_Option_Id }}">
                                        </div>
                                        <label class="form-control1">{{ $quizQuestionsOptions[$i + $j]->Quiz_Option }}</label>
                                    </div>
                            </div>
                            @endfor

                        </div>
            </div>
        </div>
        @endfor

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
        window.location.href = "{{url('student/quiz/')}}";
    }
</script>
@stop