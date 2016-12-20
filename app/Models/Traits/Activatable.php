<?php 

/**
 * app/Models/Traits/Activatable.php
 *
 * Activatable trait for adding email activation to User model.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Models\Traits;

use Carbon\Carbon;
use CtrlServer\Notifications\ConfirmUserEmail;

trait Activatable
{
    /**
     * Boot up the trait.
     * 
     * @return void
     */
    public static function bootActivatable()
    {
        self::initialize();
        self::sendNotification();
    }

    /**
     * Add attributes to the user during creation event.
     * 
     * @return void
     */
    protected static function initialize()
    {
        static::creating(function ($user) {
            $user->activation_token = str_random(64);
            $user->activated_at = null;
        });
    }

    /**
     * Send the confirmation notification after created event.
     * 
     * @return void
     */
    protected static function sendNotification()
    {
        static::created(function ($user) {
            $user->notify(new ConfirmUserEmail());
        });
    }
    
    /**
     * Activate the new user after confirmation.
     * 
     * @return void
     */
    public function activate()
    {
        $this->activation_token = null;
        $this->activated_at = (new Carbon)->now();
        $this->save();
    }

    /**
     * Set the email for the notification.
     * 
     * @return string
     */
    public function routeNotificationForMail()
    {
        return $this->email;
    }

    /**
     * Mutate the activated_at column.
     * 
     * @return boolean
     */
    public function getIsActivatedAttribute() : bool
    {
        return ($this->activated_at !== null);
    }
}
