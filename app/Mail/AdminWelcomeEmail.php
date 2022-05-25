<?php

namespace App\Mail;

use App\Models\Admin;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminWelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;
    protected $admin;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Admin  $admin)
    {
        //
        $this->admin = $admin;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.adminWelcomeEmail', [
            'admin' => $this->admin,
        ]);
    }
}
