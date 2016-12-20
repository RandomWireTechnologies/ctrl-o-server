<?php

/**
 * app/Models/MembershipType.php
 *
 * Model for interacting with the membership_types table.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Models;

use Illuminate\Database\Eloquent\Model;

class MembershipType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'name', 'duration', 'duration_unit', 
    	'max_users', 'price', 'price_2'
    ];
    
    /**
     * Has many relationship.
     * 
     * @return \CtrlServer\Models\Membership
     */
    public function memberships()
    {
        return $this->hasMany(Membership::class);
    }
}
