<?php 

/**
 * app/Models/Node.php
 *
 * Model for interacting with the nodes table.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Models;

use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    use Traits\Griddable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "nodes";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'name',
		'type',
		'enabled'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'name'    => 'string',
        'type'    => 'string',
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
            'width'    => 200
        ],
		[
            'name'     => 'type',
            'title'    => 'Type',
            'type'     => 'text',
            'validate' => 'required',
            'width'    => 200
        ],
		[
            'name'     => 'enabled',
            'title'    => 'Enabled',
            'type'     => 'checkbox',
            'width'    => 150
        ]
    ];

    /**
     * The rules that are used to validate.
     *
     * @var array
     */
    public static $rules = [
        'name'    => 'required|string',
        'type'    => 'required|string'
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
		'type' => [
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
            'required' => 'Please enter a Name for this Node.'
        ],
		'type' => [
            'required' => 'Please enter a Type for this Node.'
        ]
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
     * Process searches for Nodes.
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
                        $val   = ($value == 'true') ? true : false;
                        $query = $query->where($key, $val);
                        break;
                    case 'name':
                    case 'type':
                        $query = $query->where($key, 'like', '%' . $value . '%');
                        break;
                }
            }
        }

        return $query->get();
    }
}
