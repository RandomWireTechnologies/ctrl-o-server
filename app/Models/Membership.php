<?php

/**
 * app/Models/Membership.php
 *
 * Model for interacting with the memberships table.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Models;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'owner_id', 'membershiptype_id', 'name'
    ];

    /**
     * Has many relationship.
     * 
     * @return \CtrlServer\Models\MembershipCredit
     */
    public function credits()
    {
        return $this->hasMany(MembershipCredit::class);
    }

    /**
     * Has many relationship.
     * 
     * @return \CtrlServer\Models\MembershipSubscription
     */
    public function subscriptions()
    {
        return $this->hasMany(MembershipSubscription::class);
    }

    /**
     * Belongs to relationship.
     * 
     * @return \CtrlServer\Models\MembershipType
     */
    public function type()
    {
        return $this->belongsTo(MembershipType::class, 'membershiptype_id');
    }

    /**
     * Belongs to relationship.
     * 
     * @return \CtrlServer\Models\User
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    /**
     * Belongs to many relationship.
     * 
     * @return \CtrlServer\Models\Membership
     */
    public function users()
    {
        return $this->belongsToMany(Membership::class);
    }
}
