<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = "locais";

    public static function locais($id){
    	return Local::where('provincia_id','=',$id)
    	->get();
    }
}
