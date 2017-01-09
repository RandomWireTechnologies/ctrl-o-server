<?php 

/**
 * app/Models/Card.php
 *
 * Model for interacting with the cards table.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use Traits\Griddable;
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "cards";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'user_id',
		'name',
		'serial',
		'hash',
		'enabled'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'name'    => 'string',
        'serial'  => 'string',
        'hash'    => 'string',
        'enabled' => 'boolean'
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
            'name'     => 'serial',
            'title'    => 'Serial',
            'type'     => 'text',
            'validate' => 'required',
            'width'    => 150
        ],
        [
            'name'     => 'hash',
            'title'    => 'Hash',
            'type'     => 'text',
            'validate' => 'required',
            'width'    => 200
        ],
        [
            'name'  => 'enabled',
            'title' => 'Enabled',
            'type'  => 'checkbox',
            'width' => 50
        ]
    ];

    /**
     * The rules that are used to validate.
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'name'    => 'required|string',
        'serial'  => 'required|string',
        'hash'    => 'required|string',
        'enabled' => 'required'
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
        'serial' => [
            'required' => true
        ],
        'hash' => [
            'required' => true
        ],
    ];

    /**
     * Messages used for jsGrid validation.
     * 
     * @var array
     */
    public static $validationMessages = [
        'name' => [
            'required' => 'Please enter a Name for this Card.'
        ],
        'serial' => [
            'required' => 'Please enter a Serial for this Card.'
        ],
        'hash' => [
            'required' => 'Please enter a Hash for this Card.'
        ],
    ];

    /**
     * Set the enabled attribute from "on" to boolean.
     * 
     * @param  string  $value
     * @return void
     */
    public function setEnabledAttribute($value)
    {
        $this->attributes['enabled'] = ($value === 'on' || $value === 'true') ? true : false;
    }
    
    /**
     * Belongs to relationship.
     * 
     * @return \CtrlServer\Models\User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Process searches for Cards.
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
                    case 'enabled':
                        $val   = $value == 'true' ? true : false;
                        $query = $query->where($key, $val);
                        break;
                    case 'name':
                    case 'serial':
                    case 'hash':
                        $query = $query->where($key, 'like', '%' . $value . '%');
                    break;
                }
            }
        }

        return $query->get();
    }
}
