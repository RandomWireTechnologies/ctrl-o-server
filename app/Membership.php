<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'company', 'phone', 'address_street','address_unit','address_city','address_state','address_zipcode',
    ];


    public function credits()
    {
        return $this->hasMany(MembershipCredit::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(MembershipSubscription::class);
    }

    public function type()
    {
        return $this->belongsTo(MembershipType::class, 'membershiptype_id');
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function users()
    {
        return $this->belongsToMany(Membership::class);
    }
}
