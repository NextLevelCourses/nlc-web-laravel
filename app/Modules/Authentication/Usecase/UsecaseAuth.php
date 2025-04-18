<?php

namespace App\Modules\Authentication\Usecase;

use App\Modules\Authentication\Request\RequestAuth;
use App\Modules\Authentication\Constant\ConstantAuth;
use App\Modules\Authentication\Services\ServicesAuth;
use App\Modules\Authentication\Interface\InterfaceAuth;
use Illuminate\Http\Request;

class UsecaseAuth extends ServicesAuth implements InterfaceAuth
{
    public function __construct(
        private RequestAuth $requestAuth,
        private ConstantAuth $constantAuth,
        private Request $request
    ) {}

    public function LoginCase()
    {
        $this->requestAuth->RequestLogin($this->request, $this->constantAuth->ConstRuleLogin(), $this->constantAuth->ConstMessageLogin());
        $this->LoginServices();
    }

    public function RegisterCase()
    {
        $this->requestAuth->RequestRegister($this->request, $this->constantAuth->ConstRuleRegister(), $this->constantAuth->ConstMessageRegister());
        $this->RegisterServices();
    }

    public function LogoutCase() {}

    public function ProfileCase() {}
}
