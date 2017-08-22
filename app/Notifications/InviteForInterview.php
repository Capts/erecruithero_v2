<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class InviteForInterview extends Notification
{
    use Queueable;

    

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
        return ['database','broadcast'];
    }


    public function toDatabase($notifiable){

        return [
            'inviteTime'=> \Carbon::now()
        ];
    }

     public function toBroadcast($notifiable){

        return  new Broadcast([
            'inviteTime'=> \Carbon::now()
        ]);
    }





    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
