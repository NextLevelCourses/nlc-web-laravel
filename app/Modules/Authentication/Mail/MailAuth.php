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
    protected $username,
        $password,
        $date_registered,
        $ip,
        $email,
        $url_verification;
    public function __construct(
        string $username,
        string $password,
        string $date_registered,
        string $ip,
        string $email,
        string $url_verification
    ) {
        $this->username = $username;
        $this->password = $password;
        $this->date_registered = $date_registered;
        $this->ip = $ip;
        $this->email = $email;
        $this->url_verification = $url_verification;
    }

    /**

     * Build the message.

     *

     * @return $this

     */

    public function build()
    {
        return $this->view('auth.email.Email', [
            'username' => $this->username,
            'password' => $this->password,
            'date_registered' => $this->date_registered,
            'ip' => $this->ip,
            'email' => $this->email,
            'url_verification' => $this->url_verification,
        ])->subject('Verification Account');
    }
}
