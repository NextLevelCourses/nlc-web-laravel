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

    protected function RegisterServices($request): void
    {
        $this->RegisterRepository(
            $this->RandomName(),
            $this->RandomUsername(),
            $request->input('email'),
            $this->RandomPassword(),
            $this->RolesID(),
            $this->TokenVerification(),
            now(),
            $request->getClientIp(),
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

    private static function RandomName(): string
    {
        return 'NLC-' . Str::random(4);
    }

    private static function RandomUsername(): string
    {
        return 'nlc-' . Str::random(4);
    }

    private static function RandomPassword(): string
    {
        return Str::random(10);
    }

    private static function RolesID(): int
    {
        return 1;
    }

    private static function TokenVerification(): string
    {
        return Str::random(20);
    }
}
