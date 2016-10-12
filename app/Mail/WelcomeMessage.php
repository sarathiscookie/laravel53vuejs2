<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class WelcomeMessage extends Mailable
{
    use Queueable, SerializesModels;

    protected $users;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $users)
    {
        $this->users = $users;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.welcomeMessage')->with([
            'contactName' => $this->users->name,
            'contactEmail' => $this->users->email
        ]);
    }
}
