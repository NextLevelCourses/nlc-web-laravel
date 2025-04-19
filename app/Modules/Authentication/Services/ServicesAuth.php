<?php

namespace App\Modules\Authentication\Services;

use App\Modules\Authentication\Repository\RepositoryAuth;

class ServicesAuth extends RepositoryAuth
{
    protected function LoginServices() {}

    protected function RegisterServices($request)
    {
        if (!$this->ValidateInputEmail($request)) {
            return redirect()->route('landing.Authentication')->with('success', 'Email Valid');
        }
        return redirect()->route('landing.Authentication')->with('error', 'Email Not Valid');
    }

    private function ValidateInputEmail($request): bool
    {
        return (str_contains($request->input('email'), 'gmail.com')) || (str_contains($request->input('email'), 'yahoo.com')) ? false : true;
    }
}
