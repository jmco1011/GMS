<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    protected $guarded = [];

    public function teachers(){
        	return $this->belongsTo(Teacher::class);
        }
}
