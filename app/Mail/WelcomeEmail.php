<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable{

    use Queueable, SerializesModels;

    public $emailData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emailData)
    {
        // dd($emailData);
        $this->emailData = $emailData;
        // dd($this->emailData['name']);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('sendmail')->with([
            'name' => $this->emailData['name'],
            'email' => $this->emailData['email'],
            'msg' => $this->emailData['msg'],
        ]);
    }
}
