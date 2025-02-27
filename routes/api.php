<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\ExamTypeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ClassroomStudentController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\ExamResultController;

Route::middleware('api')->group(function () {
    Route::apiResource('parents', ParentController::class);
    Route::apiResource('teachers', TeacherController::class);
    Route::apiResource('grades', GradeController::class);
    Route::apiResource('exam_types', ExamTypeController::class);
    Route::apiResource('students', StudentController::class);
    Route::apiResource('courses', CourseController::class);
    Route::apiResource('classrooms', ClassroomController::class);
    Route::apiResource('classroom_students', ClassroomStudentController::class);
    Route::apiResource('attendances', AttendanceController::class);
    Route::apiResource('exams', ExamController::class);
    Route::apiResource('exam_results', ExamResultController::class);
});
