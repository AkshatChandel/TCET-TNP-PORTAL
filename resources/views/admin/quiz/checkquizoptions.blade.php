@extends('student.layout.student_layout')

@section('main_content')
<div class="forms">
    <div class=" form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <!-- <h4>Quiz - {{$quiz[0]->Quiz_Name}} - {{$quiz[0]->Quiz_Code}} - {{$quiz[0]->First_Name . " " . $quiz[0]->Last_Name}}</h4> -->
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

                                        @foreach($studentsData as $student)
                                        @endforeach

                                        @if($quiz[$i + $j]->Is_Correct_Answer == "Yes")
                                            <label class="form-control1" style="background-color: #40ff00">{{ $quiz[$i + $j]->Quiz_Option }}</label>
                                        @else
                                            <label class="form-control1">{{ $quiz[$i + $j]->Quiz_Option }}</label>
                                        @endif

                                        

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
                            @if($quiz[$i]->Is_Correct_Answer == "Yes")
                                <div class="col-sm-6">
                                    <label class="col-sm-2" style="color: green;">{{ $quiz[$i]->Quiz_Option }}</label>
                                </div>
                            @else
                                <div class="col-sm-6">
                                    <label class="col-sm-2" style="color: red;">{{ $quiz[$i]->Quiz_Option }}</label>
                                </div>
                            @endif

                            @if($quiz[$i + 1]->Is_Correct_Answer == "Yes")
                                <div class="col-sm-6">
                                    <label class="col-sm-2" style="color: green;">{{ $quiz[$i + 1]->Quiz_Option }}</label>
                                </div>
                            @else
                                <div class="col-sm-6">
                                    <label class="col-sm-2" style="color: red;">{{ $quiz[$i + 1]->Quiz_Option }}</label>
                                </div>
                            @endif

                            @if($quiz[$i + 2]->Is_Correct_Answer == "Yes")
                                <div class="col-sm-6">
                                    <label class="col-sm-2" style="color: green;">{{ $quiz[$i + 2]->Quiz_Option }}</label>
                                </div>
                            @else
                                <div class="col-sm-6">
                                    <label class="col-sm-2" style="color: red;">{{ $quiz[$i + 2]->Quiz_Option }}</label>
                                </div>
                            @endif

                            @if($quiz[$i + 3]->Is_Correct_Answer == "Yes")
                                <div class="col-sm-6">
                                    <label class="col-sm-2" style="color: green;">{{ $quiz[$i + 3]->Quiz_Option }}</label>
                                </div>
                            @else
                                <div class="col-sm-6">
                                    <label class="col-sm-2">{{ $quiz[$i + 3]->Quiz_Option }}</label>
                                </div>
                            @endif
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

            <!-- <input type="button" value="Back To List" onclick="backToList()" class="btn btn-primary" /> -->
        </div>
    </div>
</div>
@stop