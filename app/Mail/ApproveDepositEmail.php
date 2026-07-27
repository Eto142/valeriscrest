<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApproveDepositEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data; // Will hold the info to send

    /**
     * Create a new message instance.
     *
     * @param array $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Deposit Approved')
                    ->view('emails.approve_deposit'); // We'll create this view next
    }
}
