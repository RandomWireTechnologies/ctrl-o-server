<?php

/**
 * app/Models/MembershipSubscription.php
 *
 * Model for interacting with the membership_subscriptions table.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Models;

use Illuminate\Database\Eloquent\Model;

class MembershipSubscription extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'membership_id', 'name', 'paypal_subscription_id'
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
}
