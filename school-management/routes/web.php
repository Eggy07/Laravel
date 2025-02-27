<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ExamTypeController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExamResultController;
use App\Http\Controllers\ClassroomStudentController;

// Student Routes
Route::resource('students', StudentController::class);
Route::resource('parents', ParentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('grades', GradeController::class);
Route::resource('courses', CourseController::class);
Route::resource('classrooms', ClassroomController::class);
Route::resource('attendances', AttendanceController::class);
Route::resource('exam-types', ExamTypeController::class);
Route::resource('exams', ExamController::class);
Route::resource('exam-results', ExamResultController::class);
Route::resource('classroom-students', ClassroomStudentController::class);


Route::get('/', function () {
    return view('welcome');
});
