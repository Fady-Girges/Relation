<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = "client";
    protected $fillable=['name','address','age'];
    protected $hidden=['client_id'];

    public $timestamps = false;

    ################## Begin relations ############

    public function  phone(){
        return $this ->  hasOne('App\Models\Phone','client_id');
    }
    ################## End relations ############
}
