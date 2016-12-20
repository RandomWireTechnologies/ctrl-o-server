<?php 
/**
 * app/Models/User.php
 *
 * Model for interacting with the users table.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */
namespace CtrlServer\Models;

use Illuminate\Notifications\Notifiable;

use CtrlServer\Models\Traits\Activatable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, Activatable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "users";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'name',
		'email',
		'password',
		'level',
		'company',
		'phone',
		'address_street',
		'address_unit',
		'address_city',
		'address_state',
		'address_zipcode',
        'activated_at',
        'activation_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
		'name'            => 'string',
		'email'           => 'string',
		'password'        => 'string',
		'level'           => 'string',
		'company'         => 'string',
		'phone'           => 'string',
		'address_street'  => 'string',
		'address_unit'    => 'string',
		'address_city'    => 'string',
		'address_state'   => 'string',
		'address_zipcode' => 'string'
    ];

    /**
     * The rules that are used to validate.
     *
     * @var array
     */
    public static $rules = [
		'name'            => 'required|string',
		'email'           => 'required|string',
		'password'        => 'required|string',
		'level'           => 'required|string|max:32',
		'company'         => 'string',
		'phone'           => 'required|string|max:24',
		'address_street'  => 'required|string',
		'address_unit'    => 'required|string|max:32',
		'address_city'    => 'required|string|max:64',
		'address_state'   => 'required|string|max:2',
		'address_zipcode' => 'required|string|max:10'
    ];
    
    /**
     * Has many relationship.
     * 
     * @return \CtrlServer\Models\Card
     */
    public function cards()
    {
        return $this->hasMany(Card::class);
    }

    /**
     * Has many relationship.
     * 
     * @return \CtrlServer\Models\Membership
     */
    public function memberships_owned()
    {
        return $this->hasMany(Membership::class);
    }

    /**
     * Belongs to many relationship.
     * 
     * @return \CtrlServer\Models\User
     */
    public function memberships()
    {
        return $this->belongsToMany(User::class);
    }
}
