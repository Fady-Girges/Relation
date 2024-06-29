<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;




class Student extends Model {
    protected $table = "student";
    protected $fillable=['name','age','created_at','updated_at'];
    protected $hidden =['created_at','updated_at','pivot'];
    public $timestamps = true;

    public function courses() {
        return $this->belongsToMany('App\Models\Courses','student_courses','courses_id','student_id','id','id');
    }
}