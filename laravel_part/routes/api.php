<?php

use App\Http\Controllers\AdmissionCircularController;
use App\Http\Controllers\AdmissionFeeController;
use App\Http\Controllers\ApplicantAssesmentController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\AssesmentToolController;
use App\Http\Controllers\ClassNameController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\GardianController;
use App\Http\Controllers\InstituteController;
use App\Http\Controllers\InstituteTypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OnlineAdmissionController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\SiblingController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\YearController;
use App\Models\admission_circular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function(){
Route::resource('users',UserController::class)->names('users');
Route::resource('years',YearController::class)->names('years');
Route::resource('admission_circulars',AdmissionCircularController::class)->names('admission_circulars');
Route::resource('applicant_assesments',ApplicantAssesmentController::class)->names('applicant_assesments');
Route::resource('assesment_tools',AssesmentToolController::class)->names('assesment_tools');
Route::resource('online_admissions',OnlineAdmissionController::class)->names('online_admissions');
Route::resource('admission_fees',AdmissionFeeController::class)->names('admission_fees');
Route::resource('organizations',OrganizationController::class)->names('organizations');
Route::resource('institutes',InstituteController::class)->names('institutes');
Route::resource('institute_types',InstituteTypeController::class)->names('institute_types');
Route::resource('class_names',ClassNameController::class)->names('class_names');
Route::resource('divisions',DivisionController::class)->names('divisions');
Route::resource('districts',DistrictController::class)->names('districts');
Route::resource('areas',AreaController::class)->names('areas');
Route::resource('siblings',SiblingController::class)->names('siblings');
Route::resource('gardiens',GardianController::class)->names('gardiens');
Route::resource('students',StudentController::class)->names('students');
});


Route::post('login',[LoginController::class,'login']);
Route::post('logout',[LoginController::class,'logout'])->middleware('auth:sanctum');
