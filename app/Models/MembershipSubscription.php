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
    use Traits\Griddable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "membership_subscriptions";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'membership_id',
		'name',
		'paypal_subscription_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'membership_id'          => 'integer',
        'name'                   => 'string',
        'paypal_subscription_id' => 'string'
    ];

    /**
     * The grid array for creating jsGrids.
     *
     * @var array
     */
    protected static $grids = [
        [
            'name'          => 'membership_id',
            'title'         => 'Membership',
            'type'          => 'select',
            'validate'      => 'select',
            'width'         => 150,
            'align'         => 'left',
            'autosearch'    => true,
            'items'         => [],
            'valueField'    => 'membership_id',
            'textField'     => 'name',
            'selectedIndex' => -1,
            'valueType'     => 'number'
        ],
		[
            'name'     => 'name',
            'title'    => 'Name',
            'type'     => 'text',
            'validate' => 'required',
            'width'    => 150
        ],
		[
            'name'     => 'paypal_subscription_id',
            'title'    => 'PayPal Subscription ID',
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
        'membership_id'          => 'required|integer',
        'name'                   => 'required|string',
        'paypal_subscription_id' => 'required|string'
    ];

    /**
     * The rules used for jsGrid validation.
     * 
     * @var array
     */
    public static $validationRules = [
        'membership_id' => [
            'required' => true
        ],
		'name' => [
            'required' => true
        ],
		'paypal_subscription_id' => [
            'required' => true
        ]
    ];

    /**
     * Messages used for jsGrid validation.
     * 
     * @var array
     */
    public static $validationMessages = [
        'membership_id' => [
            'required' => 'Please enter a Membership for this Subscription.'
        ],
		'name' => [
            'required' => 'Please enter a Name for this Subscription.'
        ],
		'paypal_subscription_id' => [
            'required' => 'Please enter a PayPal Subscription ID for this Subscription.'
        ]
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
     * Process searches for Membership Subscriptions.
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
                    case 'paypal_subscription_id':
                        $query = $query->where($key, 'like', '%' . $value . '%');
                        break;
                    case 'membership_id':
                        $query = $query->where($key, $value);
                    break;
                }
            }
        }

        return $query->get();
    }
}
