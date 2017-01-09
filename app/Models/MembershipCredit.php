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

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class MembershipCredit extends Model
{
    use Traits\Griddable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "membership_credits";

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'purchased_at', 
        'begins_at', 
        'ends_at', 
        'created_at', 
        'updated_at'
    ];
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'membership_id',
		'membership_subscription_id',
		'price_paid',
		'payment_type',
		'purchased_at',
		'begins_at',
		'ends_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'membership_id'              => 'integer',
        'membership_subscription_id' => 'integer',
        'payment_type'               => 'string'
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
            'width'         => 200,
            'align'         => 'left',
            'autosearch'    => true,
            'items'         => [],
            'valueField'    => 'membership_id',
            'textField'     => 'name',
            'selectedIndex' => -1,
            'valueType'     => 'number'
        ],
	   [
            'name'          => 'membership_subscription_id',
            'title'         => 'Subscription',
            'type'          => 'select',
            'validate'      => 'select',
            'width'         => 200,
            'align'         => 'left',
            'autosearch'    => true,
            'items'         => [],
            'valueField'    => 'membership_subscription_id',
            'textField'     => 'name',
            'selectedIndex' => -1,
            'valueType'     => 'number'
        ],
	   [
            'name'     => 'price_paid',
            'title'    => 'Price Paid',
            'type'     => 'text',
            'validate' => 'required',
            'width'    => 100
        ],
	   [
            'name'     => 'payment_type',
            'title'    => 'Payment Type',
            'type'     => 'text',
            'validate' => 'required',
            'width'    => 150
        ],
	   [
            'name'     => 'purchased_at',
            'title'    => 'Purchased',
            'type'     => 'date',
            'validate' => 'required',
            'width'    => 120
        ],
	   [
            'name'     => 'begins_at',
            'title'    => 'Begins',
            'type'     => 'date',
            'validate' => 'required',
            'width'    => 120
        ],
	   [
            'name'     => 'ends_at',
            'title'    => 'Ends',
            'type'     => 'date',
            'validate' => 'required',
            'width'    => 120
        ]
    ];

    /**
     * The rules that are used to validate.
     *
     * @var array
     */
    public static $rules = [
        'membership_id'              => 'required|integer',
        'membership_subscription_id' => 'integer',
        'price_paid'                 => 'required',
        'payment_type'               => 'required|string',
        'purchased_at'               => 'required'
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
        'membership_subscription_id' => [
            'required' => true
        ],
        'price_paid' => [
            'required' => true
        ],
        'payment_type' => [
            'required' => true
        ],
        'purchased_at' => [
            'required' => true
        ],
        'begins_at' => [
            'required' => true
        ],
        'ends_at' => [
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
            'required' => 'Please enter a Membership for this Credit.'
        ],
        'membership_subscription_id' => [
            'required' => 'Please enter a Subscription for this Credit.'
        ],
        'price_paid' => [
            'required' => 'Please enter a Price Paid for this Credit.'
        ],
        'payment_type' => [
            'required' => 'Please enter a Payment Type for this Credit.'
        ],
        'purchased_at' => [
            'required' => 'Please enter a Purchased date for this Credit.'
        ],
        'begins_at' => [
            'required' => 'Please enter a Begins date for this Credit.'
        ],
        'ends_at' => [
            'required' => 'Please enter a Ends date for this Credit.'
        ]
    ];

    /**
     * Set the accessor for mutating purchased_at date.
     * 
     * @param  datetime $value
     * @return string
     */
    public function getPurchasedAtAttribute($value)
    {
        return Carbon::parse($value)->format('m/d/Y');
    }

    /**
     * Set the accessor for mutating begins_at date.
     * 
     * @param  datetime $value
     * @return string
     */
    public function getBeginsAtAttribute($value)
    {
        return Carbon::parse($value)->format('m/d/Y');
    }

    /**
     * Set the accessor for mutating ends_at date.
     * 
     * @param  datetime $value
     * @return string
     */
    public function getEndsAtAttribute($value)
    {
        return Carbon::parse($value)->format('m/d/Y');
    }

    /**
     * Set the mutator for mutating purchased_at date.
     * 
     * @param string $value
     */
    public function setPurchasedAtAttribute($value)
    {
        $this->attributes['purchased_at'] = Carbon::createFromFormat('m/d/Y', $value)->toDateString();
    }

    /**
     * Set the mutator for mutating begins_at date.
     * 
     * @param string $value
     */
    public function setBeginsAtAttribute($value)
    {
        $this->attributes['begins_at'] = Carbon::createFromFormat('m/d/Y', $value)->toDateString();
    }

    /**
     * Set the mutator for mutating ends_at date.
     * 
     * @param string $value
     */
    public function setEndsAtAttribute($value)
    {
        $this->attributes['ends_at'] = Carbon::createFromFormat('m/d/Y', $value)->toDateString();
    }
    
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
        return $this->belongsTo(MembershipSubscription::class);
    }

    /**
     * Process searches for Membership Credits.
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
                    case 'membership_id':
                    case 'membership_subscription_id':
                    case 'price_paid':
                        $query = $query->where($key, $value);
                        break;
                    case 'payment_type':
                        $query = $query->where($key, 'like', '%' . $value . '%');
                    break;
                    case 'purchased_at':
                    case 'begins_at':
                    case 'ends_at':
                        $query = $query->whereDate($key, Carbon::createFromFormat('m/d/Y', $value)->toDateString());
                    break;
                }
            }
        }

        return $query->get();
    }
}
