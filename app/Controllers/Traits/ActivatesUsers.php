<?php 

/**
 * app/Controllers/Traits/ActivatesUsers.php
 *
 * Activate users trait for email activations.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Controllers\Traits;

use Illuminate\Http\Request;

trait ActivatesUsers
{
    /**
     * Override of AuthenticatesUsers credentials method.
     * 
     * @param  Request $request
     * @return array           
     */
    protected function credentials(Request $request)
    {
        $credentials = $request->only($this->username(), 'password');
        $credentials['activation_token'] = null;

        return $credentials;
    }
}
