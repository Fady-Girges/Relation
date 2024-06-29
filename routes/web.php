<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});

Route::get('has-one','App\\Http\\Controllers\\Relation\RelationsController@hasOneRelation');
Route::get('client','App\\Http\\Controllers\\Relation\RelationsController@client');
Route::get('client/phone/{client_id}','App\\Http\\Controllers\\Relation\RelationsController@oneTOone')-> name('client.phone');

Route::get('university-has-many','App\\Http\\Controllers\\Relation\RelationsController@getUniversityProfessors');
Route::get('university','App\\Http\\Controllers\\Relation\RelationsController@university');
Route::get('professor/{university_id}','App\\Http\\Controllers\\Relation\RelationsController@professor')-> name('university.professor');

Route::get('student_courses','App\\Http\\Controllers\\Relation\RelationsController@getStudentCourses');
Route::get('student','App\\Http\\Controllers\\Relation\RelationsController@student');
Route::get('student/courses/{student_id}','App\\Http\\Controllers\\Relation\RelationsController@getStudentCoursesMany')-> name('student.courses');

Route::get('polymorphic','App\\Http\\Controllers\\Relation\RelationsController@getVideoPost');

