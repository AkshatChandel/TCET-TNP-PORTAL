@extends('admin.layout.admin_layout')

@section('main_content')
<div class="forms">
    <div class=" form-grids row form-grids-right">
        <div class="widget-shadow " data-example-id="basic-forms">
            <div class="form-title">
                <h4>Quiz</h4>
            </div>
            <div class="form-body">
                <form class="form-horizontal" action="create" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="txt_QuizName" class="col-sm-2 control-label">Quiz Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_QuizName" name="Quiz_Name" placeholder="Quiz Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_QuizCode" class="col-sm-2 control-label">Quiz Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="txt_QuizCode" name="Quiz_Code" placeholder="Quiz Code" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_QuizTime" class="col-sm-2 control-label">Quiz Time</label>
                        <div class="col-sm-9">
                            <input type="datetime-local" class="form-control" id="txt_QuizTime" name="Quiz_Time" placeholder="Quiz Code" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="txt_QuizDuration" class="col-sm-2 control-label">Quiz Duration (in minutes)</label>
                        <div class="col-sm-9">
                            <input type="number" min="0" class="form-control" id="txt_QuizDuration" name="Quiz_Duration" placeholder="Quiz Duration (in minutes)" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select_StaffId" class="col-sm-2 control-label">Staff</label>
                        <div class="col-sm-9">
                            <select id="select_StaffId" name="Staff_Id" class="form-control">
                                @foreach($staffs as $staff)
                                <option value="{{$staff->Staff_Id}}">{{$staff->First_Name . " " . $staff->Middle_Name . " " . $staff->Last_Name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="select_QuizStatus" class="col-sm-2 control-label">Quiz Status</label>
                        <div class="col-sm-9">
                            <select id="select_QuizStatus" name="Quiz_Status" class="form-control">
                                <option>Active</option>
                                <option>De-Active</option>
                            </select>
                        </div>
                    </div>

                    <hr color="grey">
                    <div class="my-4">
                        <h4>Quiz Questions</h4>
                    </div>
                    <hr color="grey">

                    <button type="button" class="btn btn-primary" onclick="addQuizQuestion()">Add Question</button>

                    <div id="quiz-question-div"></div>

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
    function addQuizQuestion() {
        let html = `<table class="table table-hover quiz-question-table">
                        <thead class="table-dark">
                            <tr>
                                <th>
                                    <button type="button" class="btn btn-danger" onclick="removeQuizQuestion(this)">-</button>
                                </th>
                                <th>
                                    <input type="text" class="form-control" name="Quiz_Question[]" placeholder="Quiz Question" required>
                                </th>
                                <th>Is Correct Answer?</th>
                            </tr>
                        </thead>
                        <tbody id="company-round-tbody">
                            <tr>
                                <th>1</th>
                                <td>
                                    <input type="text" class="form-control" name="Quiz_Option[]" placeholder="Quiz Option" required>
                                </td>
                                <td>
                                    <select class="form-control" name="Is_Correct_Answer[]">
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>2</th>
                                <td>
                                    <input type="text" class="form-control" name="Quiz_Option[]" placeholder="Quiz Option" required>
                                </td>
                                <td>
                                    <select class="form-control" name="Is_Correct_Answer[]">
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>3</th>
                                <td>
                                    <input type="text" class="form-control" name="Quiz_Option[]" placeholder="Quiz Option" required>
                                </td>
                                <td>
                                    <select class="form-control" name="Is_Correct_Answer[]">
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>4</th>
                                <td>
                                    <input type="text" class="form-control" name="Quiz_Option[]" placeholder="Quiz Option" required>
                                </td>
                                <td>
                                    <select class="form-control" name="Is_Correct_Answer[]">
                                        <option value="No">No</option>
                                        <option value="Yes">Yes</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>`;

        $("#quiz-question-div").append(html);
    }

    function removeQuizQuestion(btn) {
        btn.parentNode.parentNode.parentNode.parentNode.remove();
    }

    function backToList() {
        window.location.href = "{{url('admin/staff/')}}";
    }

    addQuizQuestion();
</script>

@stop