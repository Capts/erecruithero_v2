<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;


class InviteForInterview extends Notification
{
    use Queueable;

    protected $invitation;

    public function __construct($invitation)
    {
        $this->invitation=$invitation;
    }

    
    public function via($notifiable)
    {
        return ['database'];
    }


    public function toDatabase($notifiable){
        // dd($notifiable);
        return [
            'invitation'=> $this->invitation,
            'user'=>$notifiable
        ];
    }

     




    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
