<?php

namespace App\Modules\Authentication\Repository;

use Illuminate\Support\Facades\Mail;
use App\Modules\Authentication\Mail\MailAuth;
use App\Modules\Authentication\Domain\DomainAuth;

class RepositoryAuth extends DomainAuth
{
    protected function LoginRepository() {}

    /**
     * @method RegisterRepository
     *  manage business logic user register then verification email repository
     */

    protected function RegisterRepository(
        string $name,
        string $username,
        string $email,
        string $password,
        int $roles_id,
        string $token_verification,
        string $date_registered,
        string $ip
    ): void {
        $this->DomainUserRegister(
            $name,
            $username,
            $email,
            $password,
            $roles_id,
            $token_verification,
        );

        $this->SendMailVerification($email, $username, $password, $date_registered, $ip);
    }

    /**
     * @method VerificationAccountRepository
     *  manage business logic send mail verification account
     */
    protected function VerificationAccountRepository(string $token): void {}

    private static function SendMailVerification(string $email, string $username, string $password, string $date_registered, string $ip): void
    {
        Mail::to($email)->send(new MailAuth($username, $password, $date_registered, $ip, $email));
    }
}
