<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Strands extends Model
{
    protected $guarded = [];

    public function subjects(){
        	return $this->belongsTo(Subject::class);
        }
}
