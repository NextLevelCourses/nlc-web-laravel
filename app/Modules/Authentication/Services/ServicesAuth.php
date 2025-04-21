<?php

namespace App\Modules\Authentication\Services;

use Illuminate\Support\Str;
use App\Modules\Authentication\Repository\RepositoryAuth;

class ServicesAuth extends RepositoryAuth
{
    protected function LoginServices() {}

    /**
     * @method RegisterServices
     *  excec bisnis logic register
     */

    protected function RegisterServices(
        string  $randomName,
        string  $randomUsername,
        string  $email,
        string  $randomPassword,
        int     $rolesId,
        string  $tokenVerification,
        string  $dateRegistered,
        string  $ip,
        string  $urlVerification,
    ): void {
        $this->RegisterRepository(
            $randomName,
            $randomUsername,
            $email,
            $randomPassword,
            $rolesId,
            $tokenVerification,
            $dateRegistered,
            $ip,
            $urlVerification
        );
    }

    /**
     * @method VerificationAccountServices
     *  excec bisnis logic verification account
     */

    protected function VerificationAccountServices(string $token): void
    {
        $this->VerificationAccountRepository($token);
    }
}
