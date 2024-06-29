<?php

namespace App\Http\Controllers\Relation;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\University;
use App\Models\Client;
use App\Models\Video;


class RelationsController extends Controller
{


    public function client()
    {

        $client = Client::select('id', 'name','address', 'age')->get();
        return view('relation.client', compact('client'));
    }

    public function oneTOone($clientId)
    {
        $client = Client::find($clientId);
        $phone = $client->phone;

        return view('relation.phone', compact('phone'));
    }




    public function university()
    {

        $university = University::select('id', 'name', 'address')->get();
        return view('relation.university', compact('university'));
    }

    public function professor($university_id)
    {

        $university = University::find($university_id);
        $professor = $university->professor;
        return view('relation.professor', compact('professor'));
    }





    public function student()
    {

        $student = Student::select('id', 'name', 'age')->get();
        return view('relation.student', compact('student'));
    }

    public function getStudentCoursesMany($studentId)
    {
        $student = Student::find($studentId);
        $courses = $student->courses;

        return view('relation.courses', compact('courses'));
    }


 public function getVideoPost(){
    $video = Video::find(1); // Assuming you want to retrieve the first video
        $comment = $video->comment;
        return $comment;
}

}







 // public function hasOneRelation()
    // {
    //     return $client = Client::with(['phone' => function ($q) {
    //         $q->select('code', 'number', 'client_id');
    //     }])->find(1);


    //     return response()->json($client);
    // }







     // public function getUniversityProfessors()
    // {
    //     $university = University::find(1);


    //   return $university = University::with('professor')->find(1);


    //     // $professor = $university->professor;



    //     // $professor = University::find(2);

    //     // return $professor->university->name;


    // }






    // public function getStudentCourses()
    // // {
    //     return $student = Student::with('courses')->find(1);
    //       return $student -> courses;
    // }
