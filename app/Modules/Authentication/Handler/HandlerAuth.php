<?php

namespace App\Modules\Authentication\Handler;

use App\Modules\Authentication\Constant\ConstantAuth;
use App\Modules\Authentication\Domain\DomainErrorLogAuth;
use App\Modules\Authentication\Usecase\UsecaseAuth;
use Illuminate\Http\Request;

class HandlerAuth extends ConstantAuth
{
    public function __construct(
        private UsecaseAuth $usecaseAuth,
        private Request $request,
    ) {}
    public function login()
    {
        return $this->usecaseAuth->LoginCase(
            $this->request,
            $this->ConstRuleLogin(),
            $this->ConstMessageLogin()
        );
    }

    public function register()
    {
        return $this->usecaseAuth->RegisterCase(
            $this->request,
            $this->ConstRuleRegister(),
            $this->ConstMessageRegister(),
            $this->ConstCurrentRouteLog($this->request),
            $this->ConstCurrentPathLog($this->request),
        );
    }

    public function logout()
    {
        return $this->usecaseAuth->LogoutCase();
    }

    public function profile()
    {
        return $this->usecaseAuth->ProfileCase();
    }
}
