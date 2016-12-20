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
}
