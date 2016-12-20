<?php

/**
 * app/Models/MembershipCredit.php
 *
 * Model for interacting with the membership_credits table.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Models;

use Illuminate\Database\Eloquent\Model;

class MembershipCredit extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'membership_id', 'membership_subscription_id', 'price_paid', 
    	'payment_type', 'purchased_at', 'begins_at', 'ends_at'
    ];

    /**
     * Belongs to relationship.
     * 
     * @return \CtrlServer\Models\Membership
     */
    public function membership()
    {
        return $this->belongsTo(Membership::class);
    }

    /**
     * Belongs to relationship.
     * 
     * @return \CtrlServer\Models\MembershipSubscription
     */
    public function subscription()
    {
        return $this->belongsTo(MembershipSubscription::class, 'membership_subscription_id');
    }

}
