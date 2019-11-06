<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //

	protected $fillable = [
        'id','department_name','created_at','updated_at'	
    ];


    public function courses(){
    	

    	return $this->hasMany(Course::class); 

    }
}
