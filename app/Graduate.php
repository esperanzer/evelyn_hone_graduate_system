<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graduate extends Model
{
    //



    protected $fillable = [
        'first_name', 'last_name', 'student_id', 'gender', 'phone_number', 'graduate_date',
         'department_id', 'infor_status_id', 'course_id', 'address', 'graduate_year', 'created_at', 'updated_at'
    ];

    


    public function course(){

    	return $this->belongsTo('App\Course');
    }

    public function departments(){
    	return $this->belongsTo('App\Department');
    }

    public function statuses(){
    	return $this->belongsTo('App\Statuse');
    }
}
