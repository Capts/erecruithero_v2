<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class AcceptInvite extends Notification
{
    use Queueable;

 
    protected $applying;

    public function __construct($applying)
    {
        $this->applying=$applying;
    }

    
    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'applying'=> $this->applying,
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
