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
    Route::get("admin", [App\Admin\Http\Controllers\AdminController::class, 'dashboard']);
    Route::get("admin/dashboard", [App\Admin\Http\Controllers\AdminController::class, 'dashboard']);
    Route::get("admin/profile", [App\Admin\Http\Controllers\AdminController::class, 'profile']);

    Route::get("admin/academicsession", [App\Admin\Http\Controllers\AcademicSessionController::class, 'index']);
    Route::get("admin/academicsession/create", [App\Admin\Http\Controllers\AcademicSessionController::class, 'create']);
    Route::post("admin/academicsession/create", [App\Admin\Http\Controllers\AcademicSessionController::class, 'createAcademicSession']);

    Route::get("admin/AcademicSession", [App\Admin\Http\Controllers\AcademicSessionController::class, 'index']);
    Route::get("admin/AcademicSession/create", [App\Admin\Http\Controllers\AcademicSessionController::class, 'create']);
    Route::post("admin/AcademicSession/create", [App\Admin\Http\Controllers\AcademicSessionController::class, 'createAcademicSession']);

    Route::get("admin/branch", [App\Admin\Http\Controllers\BranchController::class, 'index']);
    Route::get("admin/branch/create", [App\Admin\Http\Controllers\BranchController::class, 'create']);
    Route::post("admin/branch/create", [App\Admin\Http\Controllers\BranchController::class, 'createBranch']);

    Route::get("admin/designation", [App\Admin\Http\Controllers\DesignationController::class, 'index']);
    Route::get("admin/designation/create", [App\Admin\Http\Controllers\DesignationController::class, 'create']);
    Route::post("admin/designation/create", [App\Admin\Http\Controllers\DesignationController::class, 'createDesignation']);

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
    Route::get("admin/company/view/{companyid}", [App\Admin\Http\Controllers\CompanyController::class, 'viewCompanyDetails']);
    Route::get("admin/company/updateCompanyStudentRegistrationStatus", [App\Admin\Http\Controllers\CompanyController::class, 'updateCompanyStudentRegistrationStatus']);
    Route::get("admin/company/update/{companyid}", [App\Admin\Http\Controllers\CompanyController::class, 'updateCompany']);
    Route::get("admin/company/promoteStudentTo", [App\Admin\Http\Controllers\CompanyController::class, 'promoteStudentTo']);
    Route::get("admin/company/promoteSelectedRoundStudents", [App\Admin\Http\Controllers\CompanyController::class, 'promoteSelectedRoundStudents']);
    Route::get("admin/company/updateCompanyRoundStudentSelectedStatus", [App\Admin\Http\Controllers\CompanyController::class, 'updateCompanyRoundStudentSelectedStatus']);
    Route::get("admin/company/hireStudent", [App\Admin\Http\Controllers\CompanyController::class, 'hireStudent']);

    Route::get("admin/message", [App\Admin\Http\Controllers\MessageController::class, 'index']);
    Route::get("admin/message/create", [App\Admin\Http\Controllers\MessageController::class, 'create']);
    Route::post("admin/message/create", [App\Admin\Http\Controllers\MessageController::class, 'createMessageDraft']);
    Route::get("admin/message/view/{messagedraftid}", [App\Admin\Http\Controllers\MessageController::class, 'view']);
    Route::get("admin/message/send/{messagedraftid}", [App\Admin\Http\Controllers\MessageController::class, 'send']);
    // Route::post("admin/message/send", [App\Admin\Http\Controllers\MessageController::class, 'sendMessage']);
    Route::get("admin/message/searchStudents", [App\Admin\Http\Controllers\MessageController::class, 'searchStudents']);
    Route::get("admin/message/sendMessageTo", [App\Admin\Http\Controllers\MessageController::class, 'sendMessageTo']);

    Route::get("admin/announcement", [App\Admin\Http\Controllers\AnnouncementController::class, 'index']);
    Route::get("admin/announcement/create", [App\Admin\Http\Controllers\AnnouncementController::class, 'create']);
    Route::post("admin/announcement/create", [App\Admin\Http\Controllers\AnnouncementController::class, 'createAnnouncement']);
    Route::get("admin/announcement/view/{announcementid}", [App\Admin\Http\Controllers\AnnouncementController::class, 'viewAnnouncementDetails']);

    Route::get("admin/lecture", [App\Admin\Http\Controllers\TrainingController::class, 'index']);
    Route::get("admin/lecture/create", [App\Admin\Http\Controllers\TrainingController::class, 'create']);
    Route::post("admin/lecture/create", [App\Admin\Http\Controllers\TrainingController::class, 'createLecture']);
    Route::get("admin/lecture/view/{traininglectureid}", [App\Admin\Http\Controllers\TrainingController::class, 'viewLectureDetails']);
});

Route::group(['middleware' => ['staffAuthenticate']], function () {
    Route::get("staff", [App\Staff\Http\Controllers\StaffController::class, 'dashboard']);
    Route::get("staff/dashboard", [App\Staff\Http\Controllers\StaffController::class, 'dashboard']);
    Route::get("staff/profile", [App\Staff\Http\Controllers\StaffController::class, 'profile']);

    Route::get("staff/quiz", [App\Staff\Http\Controllers\QuizController::class, 'index']);
    Route::get("staff/quiz/create", [App\Staff\Http\Controllers\QuizController::class, 'create']);
    Route::post("staff/quiz/create", [App\Staff\Http\Controllers\QuizController::class, 'createQuiz']);
    Route::get("staff/quiz/checkquiz/{quizid}", [App\Staff\Http\Controllers\QuizController::class, 'checkQuiz']);
    Route::get("staff/quiz/checkquizoptions/{quizid}", [App\Staff\Http\Controllers\QuizController::class, 'checkQuizOptions']);

    Route::get("staff/company", [App\Staff\Http\Controllers\CompanyController::class, 'index']);
    Route::get("staff/company/create", [App\Staff\Http\Controllers\CompanyController::class, 'create']);
    Route::post("staff/company/create", [App\Staff\Http\Controllers\CompanyController::class, 'createCompany']);
    Route::get("staff/company/view/{companyid}", [App\Staff\Http\Controllers\CompanyController::class, 'viewCompanyDetails']);
    Route::get("staff/company/updateCompanyStudentRegistrationStatus", [App\Staff\Http\Controllers\CompanyController::class, 'updateCompanyStudentRegistrationStatus']);
    Route::get("staff/company/update/{companyid}", [App\Staff\Http\Controllers\CompanyController::class, 'updateCompany']);
    Route::get("staff/company/promoteStudentTo", [App\Staff\Http\Controllers\CompanyController::class, 'promoteStudentTo']);
    Route::get("staff/company/promoteSelectedRoundStudents", [App\Staff\Http\Controllers\CompanyController::class, 'promoteSelectedRoundStudents']);
    Route::get("staff/company/updateCompanyRoundStudentSelectedStatus", [App\Staff\Http\Controllers\CompanyController::class, 'updateCompanyRoundStudentSelectedStatus']);
    Route::get("staff/company/hireStudent", [App\Staff\Http\Controllers\CompanyController::class, 'hireStudent']);

    Route::get("staff/message", [App\Staff\Http\Controllers\MessageController::class, 'index']);
    Route::get("staff/message/create", [App\Staff\Http\Controllers\MessageController::class, 'create']);
    Route::post("staff/message/create", [App\Staff\Http\Controllers\MessageController::class, 'createMessageDraft']);
    Route::get("staff/message/view/{messagedraftid}", [App\Staff\Http\Controllers\MessageController::class, 'view']);
    Route::get("staff/message/send/{messagedraftid}", [App\Staff\Http\Controllers\MessageController::class, 'send']);
    // Route::post("staff/message/send", [App\Staff\Http\Controllers\MessageController::class, 'sendMessage']);
    Route::get("staff/message/searchStudents", [App\Staff\Http\Controllers\MessageController::class, 'searchStudents']);
    Route::get("staff/message/sendMessageTo", [App\Staff\Http\Controllers\MessageController::class, 'sendMessageTo']);

    Route::get("staff/announcement", [App\Staff\Http\Controllers\AnnouncementController::class, 'index']);
    Route::get("staff/announcement/create", [App\Staff\Http\Controllers\AnnouncementController::class, 'create']);
    Route::post("staff/announcement/create", [App\Staff\Http\Controllers\AnnouncementController::class, 'createAnnouncement']);
    Route::get("staff/announcement/view/{announcementid}", [App\Staff\Http\Controllers\AnnouncementController::class, 'viewAnnouncementDetails']);

    Route::get("staff/lecture", [App\Staff\Http\Controllers\TrainingController::class, 'index']);
    Route::get("staff/lecture/create", [App\Staff\Http\Controllers\TrainingController::class, 'create']);
    Route::post("staff/lecture/create", [App\Staff\Http\Controllers\TrainingController::class, 'createLecture']);
    Route::get("staff/lecture/view/{traininglectureid}", [App\Staff\Http\Controllers\TrainingController::class, 'viewLectureDetails']);
});

Route::group(['middleware' => ['studentAuthenticate']], function () {
    Route::get("student", [App\Student\Http\Controllers\StudentController::class, 'dashboard']);
    Route::get("student/dashboard", [App\Student\Http\Controllers\StudentController::class, 'dashboard']);
    Route::get("student/profile", [App\Student\Http\Controllers\StudentController::class, 'profile']);

    Route::get("student/quiz", [App\Student\Http\Controllers\QuizController::class, 'index']);
    Route::get("student/quiz/attempt/{quizid}", [App\Student\Http\Controllers\QuizController::class, 'attempt']);
    Route::post("student/quiz/attempt", [App\Student\Http\Controllers\QuizController::class, 'attemptQuiz']);

    Route::get("student/company", [App\Student\Http\Controllers\CompanyController::class, 'index']);
    Route::get("student/company/view/{companyid}", [App\Student\Http\Controllers\CompanyController::class, 'viewCompanyDetails']);
    Route::get("student/company/registerForCompany", [App\Student\Http\Controllers\CompanyController::class, 'registerForCompany']);
    Route::get("student/company/getCompanyDetails", [App\Student\Http\Controllers\CompanyController::class, 'getCompanyDetails']);

    Route::get("student/message", [App\Student\Http\Controllers\MessageController::class, 'index']);
    Route::get("student/message/view/{messagesentid}", [App\Student\Http\Controllers\MessageController::class, 'viewMessage']);

    Route::get("student/lecture", [App\Student\Http\Controllers\TrainingController::class, 'index']);
    Route::get("student/lecture/view/{traininglectureid}", [App\Student\Http\Controllers\TrainingController::class, 'viewLectureDetails']);
});
