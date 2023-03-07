<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMailTest extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    // private $id;
    public function __construct( )
    {
        // $this->id = $id;
    }

    /**
     * Get the message envelope.
     */
    public function build()
    {
        return $this->from('admin@amaisoft.com')
                    ->view('mails.reset')
                    ->subject('Reset Password');
    }
}
