<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statuse extends Model
{
    //

    protected $fillable = [
        'status_name', 'created_at','updated_at'
    ];

    public function status(){

    	return $this->belongsTo(Graduate::class);
    }
}
