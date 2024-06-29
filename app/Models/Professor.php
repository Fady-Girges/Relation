<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = "professor";
    protected $fillable=['name','title','university_id','created_at','updated_at'];
    protected $hidden =['created_at','updated_at','pivot'];
    public $timestamps = true;

    public function university(){
        return $this -> belongsTo('App\Models\University','university_id','id');
    }


}
