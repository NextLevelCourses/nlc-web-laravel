<?php

namespace App\Modules\Authentication\Usecase;

use App\Modules\Authentication\Request\RequestAuth;
use App\Modules\Authentication\Services\ServicesAuth;
use App\Modules\Authentication\Interface\InterfaceAuth;
use Illuminate\Http\Request;

class UsecaseAuth extends ServicesAuth implements InterfaceAuth
{
    public function __construct(
        private RequestAuth $requestAuth,
        private Request $request
    ) {}

    public function LoginCase($ConstRuleLogin, $ConstMessageLogin)
    {
        $this->requestAuth->RequestLogin($this->request, $ConstRuleLogin, $ConstMessageLogin);
        $this->LoginServices();
    }

    public function RegisterCase($ConstRuleRegister, $ConstMessageRegister)
    {
        $this->requestAuth->RequestRegister($this->request, $ConstRuleRegister, $ConstMessageRegister);
        return $this->RegisterServices($this->request);
    }

    public function LogoutCase() {}

    public function ProfileCase() {}
}
