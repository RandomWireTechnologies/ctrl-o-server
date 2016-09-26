<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembershipSubscription extends Model
{
    //
    public function membership()
    {
        return $this->belongsTo(Membership::class);
    }
}
