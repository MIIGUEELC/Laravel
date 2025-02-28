<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $client_name;
    public $subject;
    public $comment;

    /**
     * Create a new message instance.
     */
    public function __construct($data)
    {
        $this->client_name = $data['client_name'];
        $this->subject = $data['subject'];
        $this->comment = $data['comment'];
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Thank you for contacting us!')
                    ->view('emails.email');
    }
}
