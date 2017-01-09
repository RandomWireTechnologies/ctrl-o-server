<?php 

/**
 * app/Models/Membership.php
 *
 * Model for interacting with the membership table.
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
    use Traits\Griddable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "memberships";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'user_id',
		'membershiptype_id',
		'name'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id'           => 'integer',
        'membershiptype_id' => 'integer',
        'name'              => 'string'
    ];

    /**
     * The grid array for creating jsGrids.
     *
     * @var array
     */
    protected static $grids = [
        [
            'name'          => 'user_id',
            'title'         => 'Owner ID',
            'type'          => 'select',
            'validate'      => 'select',
            'width'         => 150,
            'align'         => 'left',
            'autosearch'    => true,
            'items'         => [],
            'valueField'    => 'user_id',
            'textField'     => 'name',
            'selectedIndex' => -1,
            'valueType'     => 'number'
        ],
		[
            'name'          => 'membershiptype_id',
            'title'         => 'Membership Type',
            'type'          => 'select',
            'validate'      => 'select',
            'width'         => 150,
            'align'         => 'left',
            'autosearch'    => true,
            'items'         => [],
            'valueField'    => 'membershiptype_id',
            'textField'     => 'name',
            'selectedIndex' => -1,
            'valueType'     => 'number',
        ],
		[
            'name'     => 'name',
            'title'    => 'Name',
            'type'     => 'text',
            'validate' => 'required',
            'width'    => 150
        ]
    ];

    /**
     * The rules that are used to validate.
     *
     * @var array
     */
    public static $rules = [
        'user_id'           => 'required|integer',
        'membershiptype_id' => 'required|integer',
        'name'              => 'required|string'
    ];

    /**
     * The rules used for jsGrid validation.
     * 
     * @var array
     */
    public static $validationRules = [
        'user_id' => [
            'required' => true
        ],
        'membershiptype_id' => [
            'required' => true
        ],
        'name' => [
            'required' => true
        ],
    ];

    /**
     * Messages used for jsGrid validation.
     * 
     * @var array
     */
    public static $validationMessages = [
        'user_id' => [
            'required' => 'Please select an Owner for this Membership.'
        ],
        'membershiptype_id' => [
            'required' => 'Please select a Type for this Membership.'
        ],
        'name' => [
            'required' => 'Please enter a Name for this Membership.'
        ],
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
        return $this->belongsTo(MembershipType::class);
    }

    /**
     * Belongs to relationship.
     * 
     * @return \CtrlServer\Models\User
     */
    public function owner()
    {
        return $this->belongsTo(User::class);
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

    /**
     * Process searches for Memberships.
     * 
     * @param  Request $request
     * @return Collection
     */
    public function search($request)
    {
        $query = $this;
        
        foreach($request->only($this->fillable) as $key => $value) {
            if ($value) {
                switch($key) {
                    case 'name':
                        $query = $query->where($key, 'like', '%' . $value . '%');
                        break;
                    case 'user_id':
                    case 'membershiptype_id':
                        $query = $query->where($key, $value);
                    break;
                }
            }
        }

        return $query->get();
    }
}
