<?php

namespace App\Admin\Http\Controllers;

use App\Models\Quiz_Master;
use App\Models\Quiz_Question;
use App\Models\Quiz_Question_Option;
use App\Models\Staff_Master;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $data = DB::table('Quiz_Master')
            ->join('Staff_Master', 'Staff_Master.Staff_Id', '=', 'Quiz_Master.Staff_Id')
            ->select('Staff_Master.Staff_Id', 'Staff_Master.Staff_College_Id', 'Staff_Master.First_Name', 'Staff_Master.Middle_Name', 'Staff_Master.Last_Name', 'Staff_Master.Date_Of_Birth', 'Staff_Master.Gender', 'Staff_Master.Contact_No', 'Staff_Master.Email_Id', 'Quiz_Master.Quiz_Id', 'Quiz_Master.Quiz_Name', 'Quiz_Master.Quiz_Code', 'Quiz_Master.Quiz_Time', 'Quiz_Master.Quiz_Duration', 'Quiz_Master.Quiz_Status')
            ->get();

        return view("admin.quiz.index", ['quizzes' => $data]);
    }

    public function create()
    {
        $staffs = Staff_Master::where('Staff_Status', 'Active')->get();
        return view("admin.quiz.create", ["staffs" => $staffs]);
    }

    public function createQuiz(Request $request)
    {
        $quiz_master = new Quiz_Master;
        $quiz_master->Quiz_Name = $request->Quiz_Name;
        $quiz_master->Quiz_Code = $request->Quiz_Code;
        $quiz_master->Quiz_Time = $request->Quiz_Time;
        $quiz_master->Quiz_Duration = $request->Quiz_Duration;
        $quiz_master->Staff_Id = $request->Staff_Id;
        $quiz_master->Quiz_Status = $request->Quiz_Status;
        $quiz_master->save();

        $QuizId = $quiz_master->id;

        $QuizQuestions = $request->Quiz_Question;
        $QuizOptions = $request->Quiz_Option;
        $AreCorrectAnswers = $request->Is_Correct_Answer;

        $QuizOptionsCounter = 0;

        foreach ($QuizQuestions as $QuizQuestion) {
            $quiz_question = new Quiz_Question;
            $quiz_question->Quiz_Id = $QuizId;
            $quiz_question->Quiz_Question = $QuizQuestion;
            $quiz_question->save();

            $QuizQuestionId = $quiz_question->id;

            $QuizOptionsLoopEnd = $QuizOptionsCounter + 4;

            while ($QuizOptionsCounter < $QuizOptionsLoopEnd) {
                $quiz_question_option = new Quiz_Question_Option;
                $quiz_question_option->Quiz_Question_Id = $QuizQuestionId;
                $quiz_question_option->Quiz_Option = $QuizOptions[$QuizOptionsCounter];
                $quiz_question_option->Is_Correct_Answer = $AreCorrectAnswers[$QuizOptionsCounter];
                $quiz_question_option->save();
                $QuizOptionsCounter++;
            }
        }

        return redirect('/admin/quiz/');
    }
}
