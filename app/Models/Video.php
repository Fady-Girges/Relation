<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;






class Video extends Model {
    protected $table = "video";
    protected $fillable=['title','address','created_at','updated_at'];
    protected $hidden =['created_at','updated_at'];
    public $timestamps = true;

    public function comment() {
        return $this->morphMany(Comment::class, 'commentable');
    }
}