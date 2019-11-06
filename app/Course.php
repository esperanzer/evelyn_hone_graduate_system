<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{


    protected $fillable = [
        'course_name','department_id','created_at','updated_at'
    ];
    //
    public function departments(){

    	return $this->belongsTo(Department::class);	
    }
}
