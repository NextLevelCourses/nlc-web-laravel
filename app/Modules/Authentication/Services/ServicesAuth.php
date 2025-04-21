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
        $randomName,
        $randomUsername,
        $email,
        $randomPassword,
        $rolesId,
        $tokenVerification,
        $dateRegistered,
        $ip,
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
        );
    }

    /**
     * @method VerificationAccountServices
     *  excec bisnis logic verification account
     */

    protected function VerificationAccountServices($token): void
    {
        //
    }
}
