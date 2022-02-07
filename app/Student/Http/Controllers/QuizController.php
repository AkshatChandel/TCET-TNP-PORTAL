<?php

namespace App\Student\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    public function index()
    {
    }

    public function attempt()
    {
        $QuizId = 1;
        // $Quiz = DB::table('Quiz_Master')->find(3);
        // $Quiz = DB::table('Quiz_Master')->find(3);
    }

    public function attemptQuiz()
    {
    }
}
