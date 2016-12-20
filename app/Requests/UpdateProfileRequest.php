<?php

/**
 * app/Requests/UpdateProfileRequest.php
 *
 * Form request to validate profile change.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Requests;

use CtrlServer\Base\Request;

class UpdateProfileRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
    {
        return ($this->user() === auth()->user());
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'            => 'required|max:255',
            'phone'           => 'required|regex:/[0-9]{3}-?[0-9]{3}-?[0-9]{4}/|max:20',
            'address_street'  => 'required|max:128',
            'address_city'    => 'required|max:64',
            'address_state'   => 'required|min:2|max:2',
            'address_zipcode' => 'required|regex:/[0-9]{5}-?[0-9]*/|max:10',
        ];
    }
}
