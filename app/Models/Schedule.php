<?php 

/**
 * app/Models/Schedule.php
 *
 * Model for interacting with the schedules table.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use Traits\Griddable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "schedules";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
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
        ]
    ];

    /**
     * The rules that are used to validate.
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string'
    ];

    /**
     * The rules used for jsGrid validation.
     * 
     * @var array
     */
    public static $validationRules = [
        'name' => [
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
            'required' => 'Please enter a Name for this Schedule.'
        ]
    ];
    
    /**
     * Process searches for Schedules.
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
                    case 'true':
                    case 'false':
                        $val   = ($value == 'true') ? true : false;
                        $query = $query->where($key, $val);
                        break;
                    case 'name':
                        $query = $query->where($key, 'like', '%' . $value . '%');
                        break;
                }
            }
        }

        return $query->get();
    }
}