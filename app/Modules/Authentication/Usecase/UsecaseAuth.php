<?php

namespace App\Modules\Authentication\Usecase;

use App\Modules\Authentication\Domain\DomainAuth;
use App\Modules\Authentication\Request\RequestAuth;
use App\Modules\Authentication\Services\ServicesAuth;
use App\Modules\Authentication\Interface\InterfaceAuth;
use Illuminate\Support\Facades\DB;

class UsecaseAuth extends ServicesAuth implements InterfaceAuth
{
    public function __construct(
        private RequestAuth $requestAuth,
        private DomainAuth $domainAuth,
    ) {}

    public function LoginCase($request, $ConstRuleLogin, $ConstMessageLogin)
    {
        $this->requestAuth->RequestLogin(
            $request,
            $ConstRuleLogin,
            $ConstMessageLogin
        );
        $this->LoginServices();
    }

    public function RegisterCase($request, $ConstRuleRegister, $ConstMessageRegister, $currentRoute, $currentPath)
    {
        $this->requestAuth->RequestRegister(
            $request,
            $ConstRuleRegister,
            $ConstMessageRegister
        );

        DB::beginTransaction();
        try {
            $this->RegisterServices($request, $currentRoute);
            DB::commit();
            return redirect()->route('landing.Authentication')->with('success', 'Berhasil Registrasi');
        } catch (\Exception $error) {
            DB::rollBack();
            $this->domainAuth->DomainLogErrorInsert($error->getMessage(), $currentRoute, $currentPath);
            return redirect()->route('landing.Authentication')->with('error', $error->getMessage());
        }
    }

    public function LogoutCase() {}

    public function ProfileCase() {}
}
