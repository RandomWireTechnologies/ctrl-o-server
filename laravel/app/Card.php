<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //
    // Mass Assignable attributes
    //protected $fillable = ['name','serial'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

}

