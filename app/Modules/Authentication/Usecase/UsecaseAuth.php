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
        string $messageErrorLoginUsernameOrEmailAndPassword,
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
                $messageErrorLoginUsernameOrEmailAndPassword,
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
            DB::rollBack();
            $this->domainAuth->DomainLogInsert($error->getMessage(), $currentRoute, $currentPath, 'error');
            return redirect()->route('landing.Authentication')->with('error', $errorVerificationAccountMessage);
        }
    }

    /**
     * @method LogoutCase
     * logout account user by session
     */
    public function LogoutCase(
        string   $logoutMessageSuccess,
        string   $logoutMessageError,
        string   $currentRoute,
        string   $currentPath,
        $userSession,
    ): RedirectResponse {
        DB::beginTransaction();
        try {
            $this->LogoutService();
            $this->domainAuth->DomainLogInsert($logoutMessageSuccess . " ID: {$userSession->id}, Username {$userSession->username}", $currentRoute, $currentPath, 'error');
            DB::commit();
            return redirect()->intended('/Authentication')->with('success', $logoutMessageSuccess);
        } catch (\Exception $error) {
            DB::rollBack();
            $this->domainAuth->DomainLogInsert($error->getMessage(), $currentRoute, $currentPath, 'error');
            return redirect()->route('landing.Authentication')->with('error', $logoutMessageError);
        }
    }


    /**
     * @method ProfileCase
     * get profile by sessions
     */
    public function ProfileCase() {}

    /**
     * @method UpdateProfileCase
     * update profile by sessions
     */
    public function UpdateProfileCase() {}

    /**
     * @method ForgotPasswordCase
     * send link forgot password
     */
    public function ForgotPasswordCase(
        //validate
        $request,
        array    $ConstRuleForgotPassword,
        array    $ConstMessageForgotPassword,
        //struct forgot password
        string   $currentRoute,
        string   $currentPath,
        string   $messageSuccessForgotPassword,
    ): RedirectResponse {
        $this->requestAuth->RequestForgot(
            $request,
            $ConstRuleForgotPassword,
            $ConstMessageForgotPassword
        );
        DB::beginTransaction();
        try {
            $this->ForgotPasswordServices($request->reset_email);
            DB::commit();
            return redirect()->route('landing.Authentication')->with('success', $messageSuccessForgotPassword);
        } catch (\Exception $error) {
            DB::rollBack();
            $this->domainAuth->DomainLogInsert($error->getMessage(), $currentRoute, $currentPath, 'error');
            return redirect()->route('landing.Authentication')->with('error', $error->getMessage());
        }
    }

    /**
     * @method ResetPasswordCase
     * setup reset password
     */
    public function ResetPasswordCase(
        string  $token,
        string  $errorMessageResetPassword,
    ) {
        try {
            return $this->ResetPasswordServices($token, $errorMessageResetPassword);
        } catch (\Exception $error) {
            $this->domainAuth->DomainLogInsert($error->getMessage(), 'resetPassword', 'resetPassword', 'error');
            return redirect()->route('landing.Authentication')->with('error', $errorMessageResetPassword);
        }
    }

    /**
     * @method ChangePasswordCase
     * setup reset password
     * @return RedirectResponse
     */
    public function ChangePasswordCase(
        $request,
        array $ConstChangePasswordRules,
        array $ConstChangePasswordMessage,
        //struct change password
        string  $currentRoute,
        string  $currentPath,
        string  $successChangePasswordMessage,
    ): RedirectResponse {
        $this->requestAuth->RequestChangePassword(
            $request,
            $ConstChangePasswordRules,
            $ConstChangePasswordMessage,
        );

        DB::beginTransaction();
        try {
            $this->ChangePasswordServices($request);
            $this->domainAuth->DomainLogInsert($successChangePasswordMessage . "Email: {$request->email}", $currentRoute, $currentPath, 'success');
            DB::commit();
            return redirect()->route('landing.Authentication')->with('success', $successChangePasswordMessage);
        } catch (\Exception $error) {
            DB::rollBack();
            $this->domainAuth->DomainLogInsert($error->getMessage(), $currentRoute, $currentPath, 'error');
            return redirect()->route('landing.Authentication')->with('error', $error->getMessage());
        }
    }
}
