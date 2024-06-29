<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table = "phone";
    protected $fillable=['code','number','client_id'];
    protected $hidden=['client_id'];

    public $timestamps = false;

    ################## Begin relations ############

    public function  client(){
        return $this ->  belongsTo('App\Models\Client','client_id');
    }
    ################## End relations ############
}
