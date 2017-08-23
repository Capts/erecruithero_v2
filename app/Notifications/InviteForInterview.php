<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;


use Carbon\Carbon;

class InviteForInterview extends Notification
{
    use Queueable;

    protected $invitation;

    public function __construct($invitation)
    {
        $this->invitation=$invitation;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
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
