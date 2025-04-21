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
        string  $name,
        string  $username,
        string  $email,
        string  $password,
        int     $roles_id,
        string  $token_verification,
        string  $date_registered,
        string  $ip,
        string  $url_verification,
    ): void {
        $this->DomainUserRegister(
            $name,
            $username,
            $email,
            $password,
            $roles_id,
            $token_verification,
        );
        $url_verification = $url_verification . '/' . $token_verification;
        $this->SendMailUserVerificationRegister(
            $email,
            $username,
            $password,
            $date_registered,
            $ip,
            $url_verification
        );
    }

    /**
     * @method VerificationAccountRepository
     *  manage business logic send mail verification account
     */
    protected function VerificationAccountRepository(string $token): void
    {
        $this->DomainVerifyAccountByTokens($token);
    }

    public function DeleteTokensVerifyAcountRepository(string $email): void
    {
        $this->DomainDeleteTokensVerification($email);
    }

    public function ValidateEmailByTokensRepository(string $token)
    {
        return $this->DomainValidateEmailByTokens($token);
    }

    /**
     * @method SendMailUserVerificationRegister
     *  send mail verification register user
     */
    private static function SendMailUserVerificationRegister(
        string $email,
        string $username,
        string $password,
        string $date_registered,
        string $ip,
        string $url_verification,
    ): void {
        Mail::to($email)->send(new MailAuth($username, $password, $date_registered, $ip, $email, $url_verification));
    }
}
