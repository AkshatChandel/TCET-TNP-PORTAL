<?php

namespace App\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Student_Class;
use App\Models\Student_Quiz;
use App\Models\Student_Quiz_Answer;

class QuizController extends Controller
{
    public function index()
    {
        $data = DB::table('Quiz_Master')
            ->join('Staff_Master', 'Staff_Master.Staff_Id', '=', 'Quiz_Master.Staff_Id')
            ->select('Staff_Master.Staff_Id', 'Staff_Master.Staff_College_Id', 'Staff_Master.First_Name', 'Staff_Master.Middle_Name', 'Staff_Master.Last_Name', 'Staff_Master.Date_Of_Birth', 'Staff_Master.Gender', 'Staff_Master.Contact_No', 'Staff_Master.Email_Id', 'Quiz_Master.Quiz_Id', 'Quiz_Master.Quiz_Name', 'Quiz_Master.Quiz_Code', 'Quiz_Master.Quiz_Time', 'Quiz_Master.Quiz_Duration', 'Quiz_Master.Quiz_Status')
            ->where('Quiz_Master.Quiz_Status', '=', 'Active')
            // ->where('Quiz_Time', '<=', '')
            ->get();

        // $data = DB::table('Quiz_Master')
        // ->join('Staff_Master', 'Staff_Master.Staff_Id', '=', 'Quiz_Master.Staff_Id')
        // ->select('Staff_Master.Staff_Id', 'Staff_Master.Staff_College_Id', 'Staff_Master.First_Name', 'Staff_Master.Middle_Name', 'Staff_Master.Last_Name', 'Staff_Master.Date_Of_Birth', 'Staff_Master.Gender', 'Staff_Master.Contact_No', 'Staff_Master.Email_Id', 'Quiz_Master.Quiz_Id', 'Quiz_Master.Quiz_Name', 'Quiz_Master.Quiz_Code', 'Quiz_Master.Quiz_Time', 'Quiz_Master.Quiz_Duration', 'Quiz_Master.Quiz_Status')
        // ->get();

        return view("student.quiz.index", ['quizzes' => $data]);
    }

    public function attempt($QuizId)
    {
        // $Quiz = DB::table('Quiz_Master')->find(3);
        $quiz = DB::table('Quiz_Master')
            ->join('Quiz_Question', 'Quiz_Question.Quiz_Id', '=', 'Quiz_Master.Quiz_Id')
            ->join('Quiz_Question_Option', 'Quiz_Question_Option.Quiz_Question_Id', '=', 'Quiz_Question.Quiz_Question_Id')
            ->join('Staff_Master', 'Staff_Master.Staff_Id', '=', 'Quiz_Master.Staff_Id')
            ->where('Quiz_Master.Quiz_Id', '=', $QuizId)
            ->get();

        return view("student.quiz.attempt", ["quiz" => $quiz]);
    }

    public function attemptQuiz(Request $request)
    {
        $QuizId = $request->QuizId;
        $StudentId = session()->get('UserId');

        $StudentClass = Student_Class::select('Student_Class_Id')
            ->where('Student_Id', '=', $StudentId)
            ->where('Student_Class_Status', '=', 'Active')
            ->get();

        $StudentClassId = $StudentClass[0]->Student_Class_Id;

        $student_quiz = new Student_Quiz();
        $student_quiz->Student_Class_Id = $StudentClassId;
        $student_quiz->Quiz_Id = $QuizId;
        $student_quiz->save();

        $StudentQuizId = $student_quiz->id;

        $QuizQuestions = DB::table('Quiz_Question')->where('Quiz_Id', '=', $QuizId)->get();

        for ($i = 0; $i < count($QuizQuestions); $i++) {

            $OptionName =  "Question" . $QuizQuestions[$i]->Quiz_Question_Id;

            $student_quiz_answer = new Student_Quiz_Answer();
            $student_quiz_answer->Student_Quiz_Id = $StudentQuizId;
            $student_quiz_answer->Quiz_Question_Id = $QuizQuestions[$i]->Quiz_Question_Id;
            $student_quiz_answer->Quiz_Question_Option_Id = $request->$OptionName;
            $student_quiz_answer->save();
        }

        return redirect("student/quiz");
    }
}
