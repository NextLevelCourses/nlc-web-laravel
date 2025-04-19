<?php

namespace App\Modules\Authentication\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailAuth extends Mailable
{
    use Queueable, SerializesModels;

    /**

     * Create a new message instance.

     *

     * @return void

     */
    protected $username, $password, $date_registered, $ip, $email;
    public function __construct($username, $password, $date_registered, $ip, $email)
    {
        $this->username = $username;
        $this->password = $password;
        $this->date_registered = $date_registered;
        $this->ip = $ip;
        $this->email = $email;
    }

    /**

     * Build the message.

     *

     * @return $this

     */

    public function build()
    {
        return $this->view('auth.email.Email')->subject('Verification Account')->compact(
            $this->username,
            $this->password,
            $this->date_registered,
            $this->ip,
            $this->email,
        );
    }
}
