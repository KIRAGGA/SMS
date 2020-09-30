<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gallery', function () {
    return view('others.gallery');
});

Route::get('/blog-archive', function () {
    return view('others.blog-archive');
});

Route::get('/blog-single', function () {
    return view('others.blog-single');
});

Route::get('/contact', function () {
    return view('others.contact');
});

Route::get('/course', function () {
    return view('others.course');
});

Route::group(['mddleware' => ['studentSession']], function(){
    // passing the student route so that if the student is logged in, they will be able to see there details

});

// login form route
// Route::match();
Route::get('/student', 'StudentController@studentLogin');
Route::get('/logout', 'StudentController@studentLogout');

Route::get('/course-detail', function () {
    return view('others.course-detail');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('classes', 'classesController');

Route::resource('classrooms', 'classroomController');

Route::resource('levels', 'LevelController');

Route::resource('batches', 'BatchController');

Route::resource('shifts', 'ShiftController');

Route::resource('courses', 'CourseController');

Route::resource('faculties', 'FacultyController');

Route::resource('times', 'TimeController');

Route::resource('attendances', 'AttendanceController');

Route::resource('academics', 'AcademicController');

Route::resource('days', 'DayController');

Route::resource('classAssignings', 'ClassAssigningController');

Route::resource('classSchedulings', 'ClassSchedulingController');

Route::resource('transactions', 'TransactionController');

Route::resource('admissions', 'AdmissionController');

Route::resource('teachers', 'TeachersController');

Route::resource('roles', 'RoleController');

Route::resource('users', 'UserController');

Route::get('/dynamicLevel', ['as' => 'dynamicLevel', 'uses' =>
'ClassSchedulingController@DynamicLevel']);

Route::get('/classSchedulings/edit', ['as' => 'edit', 'uses' => 'ClassSchedulingController@edit']);

// Route::get('/admissions/edit', ['as' => 'edit', 'uses' => 'AdmissionController@edit']);

// Route::post('/classSchedulings/update', ['as' => 'update', 'uses' => 'ClassSchedulingController@update']);

Route::resource('departments', 'DepartmentController');

Route::resource('semeters', 'SemeterController');