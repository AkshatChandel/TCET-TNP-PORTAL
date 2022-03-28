@extends('student.layout.student_layout')

@section('main_content')
<div class="forms">
    <div class=" form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <h4>Quiz - {{$quiz[0]->Quiz_Name}} - {{$quiz[0]->Quiz_Code}} - {{$quiz[0]->First_Name . " " . $quiz[0]->Last_Name}}</h4>
            </div>
            <div class="form-body">
                <form class="form-horizontal" action="attempt" method="POST">
                    @csrf

                    @for ($i = 0; $i < count($quiz); $i = $i +  4)
                    <div class="col-md-12 panel-grids">
						<div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">{{ $quiz[$i]->Quiz_Question }}</h3>
                            </div>
                            <div class="panel-body">

                                @php 
                                $radioButtonName =  "Question" . $quiz[$i]->Quiz_Question_Id;
                                
                                @endphp

                                @for($j = 0; $j < 4; $j++)

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <input type="radio" name="{{ $radioButtonName }}" value="{{ $quiz[$i + $j]->Quiz_Question_Option_Id }}">
                                        </div>
                                        <label class="form-control1">{{ $quiz[$i + $j]->Quiz_Option }}</label>
                                        {{-- <input type="text" class="form-control1"> --}}
                                    </div>
                                </div>

                                @endfor

                            </div>
                        </div>
					</div>
                    {{-- <div>                                                
                        <div class="form-group">
                            <label class="col-sm-2"></label>
                        </div>                        
                        <div>
                            <div class="col-sm-6">
                                <label class="col-sm-2">{{ $quiz[$i]->Quiz_Option }}</label>
                            </div>
                            <div class="col-sm-6">
                                <label class="col-sm-2">{{ $quiz[$i + 1]->Quiz_Option }}</label>
                            </div>
                            <div class="col-sm-6">
                                <label class="col-sm-2">{{ $quiz[$i + 2]->Quiz_Option }}</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="radio" value="{{ $quiz[$i + 3]->Quiz_Question_Option_Id }}" />{{ $quiz[$i + 3]->Quiz_Option }}
                            </div>
                        </div>
                    </div>                                     --}}
                    @endfor
                    
                    <!-- <div class="form-group">
                        <label for="txt_QuizName" class="col-sm-2 control-label">Quiz Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_QuizName" name="Quiz_Name" placeholder="Quiz Name" required>
                        </div>
                    </div> -->

            <div class="col-sm-offset-2">
                <button type="submit" name="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </div>
            </form>

            <input type="button" value="Back To List" onclick="backToList()" class="btn btn-primary" />
        </div>
    </div>
</div>
@stop