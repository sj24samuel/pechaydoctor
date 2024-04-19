<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminContorller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RecommendationController;
use App\Http\Controllers\PechayDiseaseDetectController;
use App\Http\Controllers\Treatmentdosagecontroller;
use App\Http\Controllers\PechayDiseaseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/recommendation', function () {
    return view('recommendation');
});
Route::get('/upload', function () {
    return view('upload');
});
Route::get('/dashboard', function () {
    return view('/administrator/dashboard');
    //return view('/administrator/dash2');
});

//authentication
Route::get('/auth/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');


Route::get('/auth/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/auth/register', [AuthController::class, 'register']);

Route::get('/auth/forgot_password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/auth/forgot_password', [AuthController::class, 'forgotPassword'])->name('password.email');


//treatment calculator
Route::get('/recommendation',  [RecommendationController::class, 'treatmentd']);

Route::post('/calculate', [RecommendationController::class, 'calculate'])->name('calculate');

//disease detection
Route::post('/detectdisease',  [PechayDiseaseDetectController::class, 'detect'])->name('detectdisease');

Route::get('/showtestconnect', [AdminContorller::class, 'showTestAPI']);
Route::get('/testconnectapi', [AdminContorller::class, 'connectToAPI']);


//Admin Dashboard Nav-Links
Route::get('/profile', function () {
    return view('/administrator/profile/adminprofile');
});
Route::get('/trainingai', function () {
    return view('/administrator/AI_Train/index');
});
//Pechay Disease
Route::get('/diseases', [PechayDiseaseController::class, 'showdisease']);
//Ferticides and Pesticides Management
Route::get('/FPM', [Treatmentdosagecontroller::class, 'showtreatmentdosage']);
Route::get('/FPM/{id}',[Treatmentdosagecontroller::class, 'showtreatmentview'])->name('showtreatmentview');
Route::get('/FPM/update/{id}',[Treatmentdosagecontroller::class, 'showupdateview'])->name('showupdateview');
Route::get('/addnewtreatment',[Treatmentdosagecontroller::class, 'addnew'])->name('addtreatment');
Route::post('/addtreatment',[Treatmentdosagecontroller::class, 'addtreatment']);
/*Route::get('/addnewtreatment', function () {
    return view('/administrator/treatmentfolder/addnewtreatment');
});*/
Route::get('/querries', function () {
    return view('/administrator/querries/index');
});
