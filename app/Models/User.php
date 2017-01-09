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
    use Traits\Griddable, Notifiable, Activatable;

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
		'avatar',
		'role_id',
		'activated_at',
		'activation_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'name'             => 'string',
        'email'            => 'string',
        'password'         => 'string',
        'level'            => 'string',
        'company'          => 'string',
        'phone'            => 'string',
        'address_street'   => 'string',
        'address_unit'     => 'string',
        'address_city'     => 'string',
        'address_state'    => 'string',
        'address_zipcode'  => 'string',
        'avatar'           => 'string',
        'role_id'          => 'integer',
        'activation_token' => 'string'
    ];

    /**
     * The grid array for creating jsGrids.
     *
     * @var array
     */
    protected static $grids = [
        [
            'name'     => 'name',
            'title'    => 'Name',
            'type'     => 'text',
            'validate' => 'required',
            'width'    => 150
        ],
		[
            'name'     => 'email',
            'title'    => 'Email',
            'type'     => 'text',
            'validate' => 'required',
            'width'    => 200
        ],
		[
            'name'     => 'level',
            'title'    => 'Level',
            'type'     => 'text',
            'validate' => 'required',
            'width'    => 50
        ],
		[
            'name'     => 'company',
            'title'    => 'Company',
            'type'     => 'text',
            'width'    => 150
        ],
		[
            'name'     => 'phone',
            'title'    => 'Phone',
            'type'     => 'text',
            'validate' => 'required',
            'width'    => 150
        ],
		[
            'name'     => 'role_id',
            'title'    => 'Role',
            'type'     => 'number',
            'validate' => 'required',
            'width'    => 50
        ],
		[
            'name'     => 'activated_at',
            'title'    => 'Active',
            'type'     => 'text',
            'width'    => 150
        ]
    ];

    /**
     * The rules that are used to validate.
     *
     * @var array
     */
    public static $rules = [
        'name'             => 'required|string',
        'email'            => 'required|string',
        'level'            => 'required|string|max:32',
        'company'          => 'string',
        'phone'            => 'required|string|max:24',
        'address_street'   => 'required|string',
        'address_unit'     => 'required|string|max:32',
        'address_city'     => 'required|string|max:64',
        'address_state'    => 'required|string|max:2',
        'address_zipcode'  => 'required|string|max:10',
        'avatar'           => 'string',
        'role_id'          => 'required|integer',
        'activation_token' => 'string'
    ];

    /**
     * The rules used for jsGrid validation.
     * 
     * @var array
     */
    public static $validationRules = [
        'name' => [
            'required' => true
        ],
		'email' => [
            'required' => true
        ],
		'level' => [
            'required' => true
        ],
		'phone' => [
            'required' => true
        ],
		'address_street' => [
            'required' => true
        ],
		'address_city' => [
            'required' => true
        ],
		'address_state' => [
            'required' => true
        ],
		'address_zipcode' => [
            'required' => true
        ],
		'role_id' => [
            'required' => true
        ]
    ];

    /**
     * Messages used for jsGrid validation.
     * 
     * @var array
     */
    public static $validationMessages = [
        'name' => [
            'required' => 'Please enter a Name for this User.'
        ],
		'email' => [
            'required' => 'Please enter an Email for this User.'
        ],
		'level' => [
            'required' => 'Please enter a Level for this User.'
        ],
		'phone' => [
            'required' => 'Please enter a Phone for this User.'
        ],
		'address_street' => [
            'required' => 'Please enter a Street for this User.'
        ],
		'address_city' => [
            'required' => 'Please enter a City for this User.'
        ],
		'address_state' => [
            'required' => 'Please enter a State for this User.'
        ],
		'address_zipcode' => [
            'required' => 'Please enter a Zip for this User.'
        ],
		'role_id' => [
            'required' => 'Please enter a Role for this User.'
        ]
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

    /**
     * Process searches for Users.
     * 
     * @param  Request $request
     * @return Collection
     */
    public function search($request)
    {
        $query = $this;

        $items = [
            'name',
            'email',
            'level',
            'company',
            'phone',
            'address_street',
            'address_unit',
            'address_city',
            'address_state',
            'address_zipcode',
            'role_id',
            'activated_at'
        ];

        foreach($request->only($this->fillable) as $key => $value) {
            if ($value) {
                switch($key) {
                    case 'true':
                    case 'false':
                        $val   = ($value == 'true') ? true : false;
                        $query = $query->where($key, $val);
                        break;
                    default:
                        $query = $query->where($key, 'like', '%' . $value . '%');
                        break;
                }
            }
        }

        return $query->get();
    }
}
