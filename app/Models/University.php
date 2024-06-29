<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $table = "university";
    protected $fillable=['name','address','created_at','updated_at'];
    protected $hidden =['created_at','updated_at'];
    public $timestamps = true;

    public function professor(){
        return $this -> hasMany('App\Models\Professor','university_id','id');
    }
}