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
    use Traits\Griddable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "membership_types";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'name',
		'duration',
		'duration_unit',
		'max_users',
		'price',
		'price_2'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'name'          => 'string',
        'duration'      => 'integer',
        'duration_unit' => 'string',
        'max_users'     => 'integer'
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
            'name'     => 'duration',
            'title'    => 'Duration',
            'type'     => 'number',
            'validate' => 'required',
            'width'    => 150
        ],
		[
            'name'     => 'duration_unit',
            'title'    => 'Duration Unit',
            'type'     => 'text',
            'validate' => 'required',
            'width'    => 150
        ],
		[
            'name'     => 'max_users',
            'title'    => 'Max Users',
            'type'     => 'number',
            'validate' => 'required',
            'width'    => 150
        ],
		[
            'name'     => 'price',
            'title'    => 'Price',
            'type'     => 'text',
            'validate' => 'required',
            'width'    => 150
        ],
		[
            'name'     => 'price_2',
            'title'    => 'Price Alt.',
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
        'name'          => 'required|string',
        'duration'      => 'required|integer',
        'duration_unit' => 'required|string',
        'max_users'     => 'required|integer',
        'price'         => 'required'
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
		'duration' => [
            'required' => true
        ],
		'duration_unit' => [
            'required' => true
        ],
		'max_users' => [
            'required' => true
        ],
		'price' => [
            'required' => true
        ],
		'price_2' => [
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
            'required' => 'Please enter a Name for this Membership Type.'
        ],
		'duration' => [
            'required' => 'Please enter a Duration for this Membership Type.'
        ],
		'duration_unit' => [
            'required' => 'Please enter a Duration Unit for this Membership Type.'
        ],
		'max_users' => [
            'required' => 'Please enter a Max Users for this Membership Type.'
        ],
		'price' => [
            'required' => 'Please enter a Price for this Membership Type.'
        ],
		'price_2' => [
            'required' => 'Please enter a Price Alt for this Membership Type.'
        ]
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
    
    /**
     * Process searches for Membership Types.
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
                    case 'duration':
                    case 'max_users':
                    case 'price':
                    case 'price_2':
                        $query = $query->where($key, $value);
                        break;
                    case 'name':
                    case 'duration_unit':
                        $query = $query->where($key, 'like', '%' . $value . '%');
                        break;
                }
            }
        }

        return $query->get();
    }
}
