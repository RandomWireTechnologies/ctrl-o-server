<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembershipCredit extends Model
{
    //
    public function membership()
    {
        return $this->belongsTo(Membership::class);
    }

    public function subscription()
    {
        return $this->belongsTo(MembershipSubscription::class, 'membership_subscription_id');
    }

}
