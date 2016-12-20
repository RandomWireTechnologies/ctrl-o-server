<?php 

namespace CtrlServer\Requests;

use CtrlServer\Base\Request;
use CtrlServer\Models\User;

class UpdateUserRequest extends Request 
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return User::$rules;
	}

}
