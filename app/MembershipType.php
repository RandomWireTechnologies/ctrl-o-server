<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembershipType extends Model
{
    //
    public function memberships()
    {
        return $this->hasMany(Membership::class);
    }
}
