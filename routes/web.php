<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Admin\Http\Controllers\AdminController;
use App\Admin\Http\Controllers\AcademicSessionController;
use App\Admin\Http\Controllers\BranchController;
use App\Admin\Http\Controllers\DesignationController;

Route::get('/', function () {

    if (session()->has('UserId') && session()->has('UserType')) {

        $UserType = session('UserType');

        if ($UserType == "Admin") {
            return redirect('admin');
        } else if ($UserType  == "Staff") {
            return redirect('staff');
        } else if ($UserType == "Student") {
            return redirect('student');
        } else {
            return view('index');
        }
    } else {
        return view('index');
    }
});

Route::post('index', [UserController::class, 'login']);

Route::get('logout', function () {
    if (session()->has('UserId')) {
        session()->pull('UserId');
    }
    if (session()->has('UserType')) {
        session()->pull('UserType');
    }
    return redirect('/');
});

Route::group(['middleware' => ['adminAuthenticate']], function () {
    Route::get("admin", [AdminController::class, 'dashboard']);

    Route::get("admin/dashboard", [AdminController::class, 'dashboard']);

    Route::get("admin/academicsession", [AcademicSessionController::class, 'index']);
    Route::get("admin/academicsession/create", [AcademicSessionController::class, 'create']);
    Route::post("admin/academicsession/create", [AcademicSessionController::class, 'createAcademicSession']);

    Route::get("admin/AcademicSession", [AcademicSessionController::class, 'index']);
    Route::get("admin/AcademicSession/create", [AcademicSessionController::class, 'create']);
    Route::post("admin/AcademicSession/create", [AcademicSessionController::class, 'createAcademicSession']);

    Route::get("admin/branch", [BranchController::class, 'index']);
    Route::get("admin/branch/create", [BranchController::class, 'create']);
    Route::post("admin/branch/create", [BranchController::class, 'createBranch']);

    Route::get("admin/designation", [DesignationController::class, 'index']);
    Route::get("admin/designation/create", [DesignationController::class, 'create']);
    Route::post("admin/designation/create", [DesignationController::class, 'createDesignation']);

    Route::get("admin/student", [App\Admin\Http\Controllers\StudentController::class, 'index']);
    Route::get("admin/student/create", [App\Admin\Http\Controllers\StudentController::class, 'create']);
    Route::post("admin/student/create", [App\Admin\Http\Controllers\StudentController::class, 'createStudent']);

    Route::get("admin/staff", [App\Admin\Http\Controllers\StaffController::class, 'index']);
    Route::get("admin/staff/create", [App\Admin\Http\Controllers\StaffController::class, 'create']);
    Route::post("admin/staff/create", [App\Admin\Http\Controllers\StaffController::class, 'createStaff']);

    Route::get("admin/quiz", [App\Admin\Http\Controllers\QuizController::class, 'index']);
    Route::get("admin/quiz/create", [App\Admin\Http\Controllers\QuizController::class, 'create']);
    Route::post("admin/quiz/create", [App\Admin\Http\Controllers\QuizController::class, 'createQuiz']);
    Route::get("admin/quiz/checkquiz/{quizid}", [App\Admin\Http\Controllers\QuizController::class, 'checkQuiz']);
    Route::get("admin/quiz/checkquizoptions/{quizid}", [App\Admin\Http\Controllers\QuizController::class, 'checkQuizOptions']);


    Route::get("admin/company", [App\Admin\Http\Controllers\CompanyController::class, 'index']);
    Route::get("admin/company/create", [App\Admin\Http\Controllers\CompanyController::class, 'create']);
    Route::post("admin/company/create", [App\Admin\Http\Controllers\CompanyController::class, 'createCompany']);
});

Route::group(['middleware' => ['staffAuthenticate']], function () {
});

Route::group(['middleware' => ['studentAuthenticate']], function () {
    Route::get("student", [App\Student\Http\Controllers\StudentController::class, 'dashboard']);

    Route::get("student/dashboard", [App\Student\Http\Controllers\StudentController::class, 'dashboard']);

    Route::get("student/quiz", [App\Student\Http\Controllers\QuizController::class, 'index']);
    Route::get("student/quiz/attempt/{quizid}", [App\Student\Http\Controllers\QuizController::class, 'attempt']);
    Route::post("student/quiz/attempt", [App\Student\Http\Controllers\QuizController::class, 'attemptQuiz']);

    Route::get("student/company", [App\Student\Http\Controllers\CompanyController::class, 'index']);
});
