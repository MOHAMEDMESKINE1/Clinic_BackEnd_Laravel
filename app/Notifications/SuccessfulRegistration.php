<?php

namespace App\Notifications;

use Vonage\Client;
use Vonage\SMS\Message\SMS;
use Illuminate\Bus\Queueable;
use Vonage\Client\Credentials\Basic;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\VonageMessage;

class SuccessfulRegistration extends Notification implements ShouldQueue
{
    use Queueable;
    protected $project ; 
    /**
     * Create a new notification instance.
     */
    public function __construct( $project)
    {
        $this->project = $project;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['vonage'];
    }

    /**
     * Get the mail representation of the notification.
     */
    // public function toMail(object $notifiable): MailMessage
    // {
    //     return (new MailMessage)
    //                 ->line('The introduction to the notification.')
    //                 ->action('Notification Action', url('/'))
    //                 ->line('Thank you for using our application!');
    // }
    public function toVonage($notifiable)
    {
        return (new VonageMessage())
            ->content('Welcome to WeCare, ' . $this->project . '.');
    }
    public static function SendSmsNotification($notifiable)
    {
        $basic  = new Basic("b05fff58", "39vWH4Ij3bTKB5hp");
        $client = new Client($basic);

        $response = $client->sms()->send(
            new SMS("212704282927", "WeCare", $notifiable.' Has Been Registred to WeCare')
        );
        
        $message = $response->current();
        
        if ($message->getStatus() == 0) {
           
            toastr()->success('The message Has Been sent succefully','Success');

        } else {
        
            toastr()->error('The message failed with status:'.$message->getStatus(), 'Failed');

        }
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
