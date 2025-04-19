<?php

namespace App\Modules\Authentication\Services;

use App\Modules\Authentication\Mail\MailAuth;
use Illuminate\Support\Str;
use App\Modules\Authentication\Repository\RepositoryAuth;
use Illuminate\Support\Facades\Mail;

class ServicesAuth extends RepositoryAuth
{
    protected function LoginServices() {}

    protected function RegisterServices($request)
    {
        return $this->RegisterRepository(
            $this->RandomName(),
            $this->RandomUsername(),
            $request->input('email'),
            $this->RandomPassword(),
            $this->RolesID(),
            $this->TokenVerification(),
        );
        // Mail::to($request->input('email'))->send(new MailAuth());
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
