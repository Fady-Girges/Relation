<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Courses extends Model {
    protected $table = "courses";
    protected $fillable=['name','created_at','updated_at'];
    protected $hidden =['created_at','updated_at','pivot'];
    public $timestamps = true;


    public function student() {
        return $this->belongsToMany('App\Models\Student','student_courses','courses_id','student_id','id','id');
    }
}