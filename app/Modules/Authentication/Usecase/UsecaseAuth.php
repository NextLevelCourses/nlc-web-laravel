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

    /**
     * @method LoginCase
     * user account login for generate session
     */

    public function LoginCase($request, $ConstRuleLogin, $ConstMessageLogin)
    {
        $this->requestAuth->RequestLogin(
            $request,
            $ConstRuleLogin,
            $ConstMessageLogin
        );
        $this->LoginServices();
    }

    /**
     * @method RegisterCase
     * register user account
     */


    public function RegisterCase(
        $request,
        $ConstRuleRegister,
        $ConstMessageRegister,
        $currentRoute,
        $currentPath,
        $successRegisterMessage,
        $errorRegisterMessage,
        //params for services need registered
        string  $randomName,
        string  $randomUsername,
        string  $randomPassword,
        int     $rolesId,
        string  $tokenVerification,
        string  $urlVerification,
    ) {
        $this->requestAuth->RequestRegister(
            $request,
            $ConstRuleRegister,
            $ConstMessageRegister
        );

        DB::beginTransaction();
        try {
            $this->RegisterServices(
                $randomName,
                $randomUsername,
                $request->input('email'),
                $randomPassword,
                $rolesId,
                $tokenVerification,
                now(),
                $request->getClientIp(),
                $urlVerification,
            );
            DB::commit();
            return redirect()->route('landing.Authentication')->with('success', $successRegisterMessage);
        } catch (\Exception $error) {
            DB::rollBack();
            $this->domainAuth->DomainLogErrorInsert($error->getMessage(), $currentRoute, $currentPath);
            return redirect()->route('landing.Authentication')->with('error', $errorRegisterMessage);
        }
    }

    /**
     * @method VerificationAccount
     *  verif account use of tokens
     */

    public function VerificationAccountCase($token, $currentRoute, $currentPath, $successVerificationAccountMessage, $errorVerificationAccountMessage)
    {
        DB::beginTransaction();
        try {
            $this->VerificationAccountServices($token);
            DB::commit();
            return redirect()->route('landing.Authentication')->with('success', $successVerificationAccountMessage);
        } catch (\Exception $error) {
            DB::rollBack();
            $this->domainAuth->DomainLogErrorInsert($error->getMessage(), $currentRoute, $currentPath);
            return redirect()->route('landing.Authentication')->with('error', $errorVerificationAccountMessage);
        }
    }

    /**
     * @method LogoutCase
     * logout account
     */
    public function LogoutCase() {}


    /**
     * @method ProfileCase
     * get profile by sessions
     */
    public function ProfileCase() {}
}
