@extends('staff.layout.staff_layout')

@section('title', 'Quiz | ' . $quiz->Quiz_Name)

@section('main_content')
<div class="forms">
    <div class="form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <h4>Quiz - Name: {{$quiz->Quiz_Name}}, Code: {{$quiz->Quiz_Code}}, Staff: {{$quiz->First_Name . " " . $quiz->Last_Name}}</h4>
            </div>
            <div class="form-body">
                <div class="form-horizontal">
                    @csrf

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
                                            <input disabled type="radio" name="{{ $radioButtonName }}" value="{{ $quizQuestionsOptions[$i + $j]->Quiz_Question_Option_Id }}">
                                        </div>

                                        @if($quizQuestionsOptions[$i + $j]->Is_Correct_Answer == "Yes")
                                        <label class="form-control1" style="background-color: #40ff00">{{ $quizQuestionsOptions[$i + $j]->Quiz_Option }}</label>
                                        @else
                                        <label class="form-control1">{{ $quizQuestionsOptions[$i + $j]->Quiz_Option }}</label>
                                        @endif
                                    </div>
                            </div>
                            @endfor

                        </div>
                </div>
            </div>
            @endfor
            <input type="button" value="Back To List" onclick="backToList()" class="btn btn-primary" />
        </div>
    </div>
</div>
</div>
</div>

<script>
    function backToList() {
        window.location.href = "{{url('admin/quiz/')}}";
    }
</script>
@stop