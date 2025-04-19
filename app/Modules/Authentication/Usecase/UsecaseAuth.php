<?php

namespace App\Modules\Authentication\Usecase;

use App\Modules\Authentication\Request\RequestAuth;
use App\Modules\Authentication\Services\ServicesAuth;
use App\Modules\Authentication\Interface\InterfaceAuth;
use src\Domain\log\error_log;

class UsecaseAuth extends ServicesAuth implements InterfaceAuth
{
    public function __construct(
        private RequestAuth $requestAuth,
    ) {}

    public function LoginCase($request, $ConstRuleLogin, $ConstMessageLogin)
    {
        $this->requestAuth->RequestLogin($request, $ConstRuleLogin, $ConstMessageLogin);
        $this->LoginServices();
    }

    public function RegisterCase($request, $ConstRuleRegister, $ConstMessageRegister)
    {
        $this->requestAuth->RequestRegister($request, $ConstRuleRegister, $ConstMessageRegister);
        return $this->RegisterServices($request);
    }

    public function LogoutCase() {}

    public function ProfileCase() {}
}
