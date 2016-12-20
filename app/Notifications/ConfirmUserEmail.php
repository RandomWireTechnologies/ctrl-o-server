<?php

/**
 * app/Notifications/ConfirmUserEmail.php
 *
 * Confirmation notification for new users.
 *
 * @author    Gary Belvin    <gbelvin@cvitechnologies.com>
 * @author    Vince Kronlein <vkronlein@cvitechnologies.com>
 * @license   https://github.com/RandomWireTechnologies/ctrl-o-server/blob/master/LICENSE
 * @copyright Random Wire Technologies. All Rights Reserved.
 */

namespace CtrlServer\Notifications;

use CtrlServer\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ConfirmUserEmail extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $link = route('auth.register.activate', ['activationToken' => $notifiable->activation_token]);

        return (new MailMessage)
                    ->subject('Please Confirm Your Email Address')
                    ->greeting('Hey ' . $notifiable->name . ',')
                    ->line('Thanks for signing up at ' . config('app.name') . '.')
                    ->line('Please click the button below to confirm your email address.')
                    ->action('Confirm Email', $link)
                    ->line('Thanks again for signing up and we\'ll see you on the inside.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
