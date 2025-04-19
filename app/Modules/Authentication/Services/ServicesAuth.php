<?php

namespace App\Modules\Authentication\Services;

use Illuminate\Support\Str;
use App\Modules\Authentication\Repository\RepositoryAuth;

class ServicesAuth extends RepositoryAuth
{
    protected function LoginServices() {}

    protected function RegisterServices($request)
    {
        return $this->RegisterRepository(
            $this->RandomName(),
            $this->RandomUsername(),
            $request->email,
            $this->RandomPassword(),
            $this->RolesID(),
        );
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
}
