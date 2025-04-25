<?php

namespace App\Modules\Authentication\Repository;

use Illuminate\Support\Facades\Mail;
use App\Modules\Authentication\Mail\MailAuth;
use App\Modules\Authentication\Domain\DomainAuth;
use Illuminate\Support\Facades\Hash;

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
     * @return void
     */
    protected function VerificationAccountRepository(string $token): void
    {
        $this->DomainVerifyAccountByTokens($token);
    }

    /**
     * @method DeleteTokensVerifyAcountRepository
     *  manage business logic delete token after verify
     * @return void
     */
    protected function DeleteTokensVerifyAcountRepository(string $email): void
    {
        $this->DomainDeleteTokensVerification($email);
    }

    /**
     * @method ValidateEmailByTokensRepository
     *  manage business logic validate email existing
     * @return array
     */
    protected function ValidateEmailByTokensRepository(string $token): array
    {
        return $this->DomainValidateEmailByTokens($token);
    }

    /**
     * @method SendMailUserVerificationRegister
     *  send mail verification register user
     * @return void
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

    /**
     * @method ValidatePasswordByHash
     *  validate password by hash
     * @return bool
     */
    protected static function ValidatePasswordByHashRepository($passwordReq, $passwordHash): bool
    {
        return !Hash::check($passwordReq, $passwordHash) ? false : true;
    }

    /**
     * @method ValidateLoginByExistingEmailRepository
     *  validate email
     * @return bool
     */
    protected function ValidateLoginByExistingEmailRepository(string $umail): bool
    {
        return $this->DomainValidateLoginByExistingEmail($umail);
    }

    /**
     * @method ValidateLoginByExistingUsernameRepository
     *  validate username
     * @return bool
     */
    protected function ValidateLoginByExistingUsernameRepository(string $umail): bool
    {
        return $this->DomainValidateLoginByExistingUsername($umail);
    }

    /**
     * @method ValidateLoginStatusVerifyAccountRepositoryByEmail
     * validate status verify account by email
     * @return bool
     */

    protected function ValidateLoginStatusVerifyAccountRepositoryByEmail(string $email, int $accountStatus): bool
    {
        return $this->DomainValidateLoginStatusAccountByEmail($email, $accountStatus);
    }

    /**
     * @method ValidateLoginStatusVerifyAccountRepositoryByUsername
     * validate status verify account by email
     * @return bool
     */
    protected function ValidateLoginStatusVerifyAccountRepositoryByUsername(string $username, int $accountStatus): bool
    {
        return $this->DomainValidateLoginStatusAccountByUsername($username, $accountStatus);
    }
}
