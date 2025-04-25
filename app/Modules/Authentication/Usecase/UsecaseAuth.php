<?php

namespace App\Modules\Authentication\Usecase;

use App\Modules\Authentication\Domain\DomainAuth;
use App\Modules\Authentication\Request\RequestAuth;
use App\Modules\Authentication\Services\ServicesAuth;
use App\Modules\Authentication\Interface\InterfaceUseCaseAuth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class UsecaseAuth extends ServicesAuth implements InterfaceUseCaseAuth
{
    public function __construct(
        private RequestAuth $requestAuth,
        private DomainAuth $domainAuth,
    ) {}

    /**
     * @method LoginCase
     * user account login for generate session
     */

    public function LoginCase(
        $request,
        array $ConstRuleLogin,
        array $ConstMessageLogin,
        //struct login
        string $messageErrorLoginUsernameOrEmail,
        string $messageErrorLoginPassword,
        string $messageErrorLoginVerification,
        string $currentRoute,
        string $currentPath,
        string $errorLoginMessage,
        string $successLoginMessage,
    ): RedirectResponse {
        $this->requestAuth->RequestLogin(
            $request,
            $ConstRuleLogin,
            $ConstMessageLogin,
        );
        try {
            return $this->LoginServices(
                $request,
                $messageErrorLoginUsernameOrEmail,
                $messageErrorLoginPassword,
                $messageErrorLoginVerification,
                $successLoginMessage,
            );
            $this->domainAuth->DomainLogInsert($successLoginMessage, $currentRoute, $currentPath, 'success');
        } catch (\Exception $error) {
            $this->domainAuth->DomainLogInsert($error->getMessage(), $currentRoute, $currentPath, 'error');
            return redirect()->route('landing.Authentication')->with('error', $errorLoginMessage);
        }
    }


    /**
     * @method RegisterCase
     * register user account
     */


    public function RegisterCase(
        $request,
        array    $ConstRuleRegister,
        array    $ConstMessageRegister,
        string   $currentRoute,
        string   $currentPath,
        string   $successRegisterMessage,
        string   $errorRegisterMessage,
        //params for services need registered
        string   $randomName,
        string   $randomUsername,
        string   $randomPassword,
        int      $rolesId,
        string   $tokenVerification,
        string   $urlVerification,
    ): RedirectResponse {
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
            $this->domainAuth->DomainLogInsert($successRegisterMessage, $currentRoute, $currentPath, 'success');
            return redirect()->route('landing.Authentication')->with('success', $successRegisterMessage);
        } catch (\Exception $error) {
            DB::rollBack();
            $this->domainAuth->DomainLogInsert($error->getMessage(), $currentRoute, $currentPath, 'error');
            return redirect()->route('landing.Authentication')->with('error', $errorRegisterMessage);
        }
    }

    /**
     * @method VerificationAccount
     *  verif account use of tokens
     */

    public function VerificationAccountCase(
        string   $token,
        string   $currentRoute,
        string   $currentPath,
        string   $successVerificationAccountMessage,
        string   $errorVerificationAccountMessage
    ): RedirectResponse {
        // DB::beginTransaction();
        try {
            $this->VerificationAccountServices($token);
            DB::commit();
            $this->domainAuth->DomainLogInsert($successVerificationAccountMessage, $currentRoute, $currentPath, 'success');
            return redirect()->route('landing.Authentication')->with('success', $successVerificationAccountMessage);
        } catch (\Exception $error) {
            // DB::rollBack();
            $this->domainAuth->DomainLogInsert($error->getMessage(), $currentRoute, $currentPath, 'error');
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
