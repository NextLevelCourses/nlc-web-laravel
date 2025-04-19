<?php

namespace App\Modules\Authentication\Handler;

use App\Modules\Authentication\Constant\ConstantAuth;
use App\Modules\Authentication\Usecase\UsecaseAuth;

class HandlerAuth extends ConstantAuth
{
    public function __construct(
        private UsecaseAuth $usecaseAuth,
    ) {}
    public function login()
    {
        return $this->usecaseAuth->LoginCase($this->ConstRuleLogin(), $this->ConstMessageLogin());
    }

    public function register()
    {
        return $this->usecaseAuth->RegisterCase($this->ConstRuleRegister(), $this->ConstMessageRegister());
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
