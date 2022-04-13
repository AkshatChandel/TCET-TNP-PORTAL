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
        $quizzes = DB::table('Quiz_Master')
            ->join('Staff_Master', 'Staff_Master.Staff_Id', '=', 'Quiz_Master.Staff_Id')
            ->select('Staff_Master.Staff_Id', 'Staff_Master.Staff_College_Id', 'Staff_Master.First_Name', 'Staff_Master.Middle_Name', 'Staff_Master.Last_Name', 'Staff_Master.Date_Of_Birth', 'Staff_Master.Gender', 'Staff_Master.Contact_No', 'Staff_Master.Email_Id', 'Quiz_Master.Quiz_Id', 'Quiz_Master.Quiz_Name', 'Quiz_Master.Quiz_Code', 'Quiz_Master.Quiz_Time', 'Quiz_Master.Quiz_Duration', 'Quiz_Master.Quiz_Status')
            ->get();

        return view("admin.quiz.index", ['quizzes' => $quizzes]);
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

        $QuizId = $quiz_master->Quiz_Id;

        $QuizQuestions = $request->Quiz_Question;
        $QuizOptions = $request->Quiz_Option;
        $AreCorrectAnswers = $request->Is_Correct_Answer;

        $QuizOptionsCounter = 0;

        foreach ($QuizQuestions as $QuizQuestion) {
            $quiz_question = new Quiz_Question;
            $quiz_question->Quiz_Id = $QuizId;
            $quiz_question->Quiz_Question = $QuizQuestion;
            $quiz_question->save();

            $QuizQuestionId = $quiz_question->Quiz_Question_Id;

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

    public function viewQuiz($QuizId)
    {
        $quiz = Quiz_Master::find($QuizId)
            ->join('Staff_Master', 'Staff_Master.Staff_Id', '=', 'Quiz_Master.Staff_Id')
            ->first();

        $quizQuestionsOptions = DB::Table('Quiz_Question')
            ->join('Quiz_Question_Option', 'Quiz_Question_Option.Quiz_Question_Id', '=', 'Quiz_Question.Quiz_Question_Id')
            ->where('Quiz_Question.Quiz_Id', '=', $QuizId)
            ->get();

        return view("admin.quiz.view", ['quiz' => $quiz, 'quizQuestionsOptions' => $quizQuestionsOptions]);
    }

    public function checkQuiz($QuizId)
    {
        $quizData = DB::table('Quiz_Master')
            ->where('Quiz_Master.Quiz_Id', '=', $QuizId)
            ->select('Quiz_Master.Quiz_Id', 'Quiz_Master.Quiz_Code', 'Quiz_Master.Quiz_Name')
            ->get();

        $studentsData = DB::table('Student_Quiz')
            ->join('Quiz_Master', 'Quiz_Master.Quiz_Id', '=', 'Student_Quiz.Quiz_Id')
            ->join('Student_Class', 'Student_Class.Student_Class_Id', '=', 'Student_Quiz.Student_Class_Id')
            ->join('Student_Master', 'Student_Master.Student_Id', '=', 'Student_Class.Student_Id')
            ->join('Branch_Master', 'Branch_Master.Branch_Id', '=', 'Student_Class.Branch_Id')
            ->join('Student_Quiz_Answer', 'Student_Quiz_Answer.Student_Quiz_Id', 'Student_Quiz.Student_Quiz_Id')
            ->select('Student_Master.Student_Id', 'Student_Class.Student_Class_Id', 'Student_Master.First_Name', 'Student_Master.Middle_Name', 'Student_Master.Last_Name', 'Branch_Master.Branch_Name', 'Student_Quiz_Answer.Quiz_Question_Option_Id')
            ->get();

        $quizCorrectAnswers = DB::Table("Quiz_Question")
            ->join('Quiz_Question_Option', 'Quiz_Question_Option.Quiz_Question_Id', '=', 'Quiz_Question.Quiz_Question_Id')
            ->where('Quiz_Question.Quiz_Id', '=', $QuizId)
            ->where('Quiz_Question_Option.Is_Correct_Answer', '=', 'Yes')
            ->select('Quiz_Question_Option.Quiz_Question_Id', 'Quiz_Question_Option.Quiz_Question_Option_Id')
            ->get();

        return view("admin.quiz.checkquiz", ['quizData' => $quizData, 'studentsData' => $studentsData, 'quizCorrectAnswers' => $quizCorrectAnswers]);
    }

    public function checkQuizOptions($QuizId, Request $request)
    {
        $quiz = DB::table('Quiz_Master')
            ->join('Quiz_Question', 'Quiz_Question.Quiz_Id', '=', 'Quiz_Master.Quiz_Id')
            ->join('Quiz_Question_Option', 'Quiz_Question_Option.Quiz_Question_Id', '=', 'Quiz_Question.Quiz_Question_Id')
            ->join('Staff_Master', 'Staff_Master.Staff_Id', '=', 'Quiz_Master.Staff_Id')
            ->where('Quiz_Master.Quiz_Id', '=', $QuizId)
            ->get();

        // $quizData = DB::table('Quiz_Master')
        //     ->where('Quiz_Id','=',$QuizId);

        $StudentClassId = $request->studentclassid;

        $studentsData = DB::table('Student_Quiz')
            ->join('Quiz_Master', 'Quiz_Master.Quiz_Id', '=', 'Student_Quiz.Quiz_Id')
            ->join('Student_Class', 'Student_Class.Student_Class_Id', '=', 'Student_Quiz.Student_Class_Id')
            ->join('Student_Master', 'Student_Master.Student_Id', '=', 'Student_Class.Student_Id')
            ->join('Branch_Master', 'Branch_Master.Branch_Id', '=', 'Student_Class.Branch_Id')
            ->join('Student_Quiz_Answer', 'Student_Quiz_Answer.Student_Quiz_Id', 'Student_Quiz.Student_Quiz_Id')
            ->where('Student_Class.Student_Class_Id', '=', $StudentClassId)
            ->select('Student_Master.Student_Id', 'Student_Master.First_Name', 'Student_Master.Middle_Name', 'Student_Master.Last_Name', 'Branch_Master.Branch_Name', 'Student_Quiz_Answer.Quiz_Question_Id', 'Student_Quiz_Answer.Quiz_Question_Option_Id')
            ->get();

        // $quizCorrectAnswers = DB::Table("Quiz_Master")
        //     ->join('Quiz_Question', 'Quiz_Question.Quiz_Id', '=', 'Quiz_Master.Quiz_Id')
        //     ->join('Quiz_Question_Option', 'Quiz_Question_Option.Quiz_Question_Id', '=', 'Quiz_Question.Quiz_Question_Id')
        //     ->where('Quiz_Question_Option.Is_Correct_Answer', '=', 'Yes');

        return view("admin.quiz.checkquizoptions", ['quiz' => $quiz, 'studentsData' => $studentsData]);
    }
}
