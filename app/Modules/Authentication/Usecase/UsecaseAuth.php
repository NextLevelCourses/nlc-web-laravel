<?php

namespace App\Modules\Authentication\Usecase;

use App\Modules\Authentication\Request\RequestAuth;
use App\Modules\Authentication\Services\ServicesAuth;
use App\Modules\Authentication\Interface\InterfaceAuth;
use App\Modules\Authentication\Domain\DomainErrorLogAuth;
use App\Modules\Authentication\Domain\DomainUserAuth;

class UsecaseAuth extends ServicesAuth implements InterfaceAuth
{
    public function __construct(
        private RequestAuth $requestAuth,
        private DomainErrorLogAuth $domainErrorLogAuth,
        private DomainUserAuth $domainUser,
    ) {}

    public function LoginCase(
        $request,
        $ConstRuleLogin,
        $ConstMessageLogin
    ) {
        $this->requestAuth->RequestLogin(
            $request,
            $ConstRuleLogin,
            $ConstMessageLogin
        );
        $this->LoginServices();
    }

    public function RegisterCase(
        $request,
        $ConstRuleRegister,
        $ConstMessageRegister,
        $currentRoute,
        $currentPath,
    ) {
        $this->requestAuth->RequestRegister(
            $request,
            $ConstRuleRegister,
            $ConstMessageRegister
        );

        try {
            return $this->RegisterServices($request);
        } catch (\Exception $error) {
            $this->domainErrorLogAuth->insert($error->getMessage(), $currentRoute, $currentPath);
            return redirect()->route($currentRoute)->with('error', $error->getMessage());
        }
    }

    public function LogoutCase() {}

    public function ProfileCase() {}
}
