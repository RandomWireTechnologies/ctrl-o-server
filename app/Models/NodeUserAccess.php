<?php 

namespace CtrlServer\Models;

use Illuminate\Database\Eloquent\Model;

class NodeUserAccess extends Model
{
    use Traits\Griddable;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "node_user_access";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'user_id',
		'node_id',
		'schedule_id',
		'membership_type_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
		'node_id' => 'integer',
		'schedule_id' => 'integer',
		'membership_type_id' => 'integer'
    ];

    /**
     * The grid array for creating jsGrids.
     *
     * @var array
     */
    protected static $grids = [
        $GRID$
    ];

    /**
     * The rules that are used to validate.
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
		'node_id' => 'required|integer',
		'schedule_id' => 'required|integer',
		'membership_type_id' => 'required|integer'
    ];

    /**
     * The rules used for jsGrid validation.
     * 
     * @var array
     */
    public static $validationRules = [
        $VALIDATION_RULES$
    ];

    /**
     * Messages used for jsGrid validation.
     * 
     * @var array
     */
    public static $validationMessages = [
        $VALIDATION_MESSAGES$
    ];
    
    

    /**
     * Process searches for NodeUserAccesss.
     * 
     * @param  Request $request
     * @return Collection
     */
    public function search($request)
    {
        $query = $this;

        $items = [
            'user_id',
		'node_id',
		'schedule_id',
		'membership_type_id'
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
