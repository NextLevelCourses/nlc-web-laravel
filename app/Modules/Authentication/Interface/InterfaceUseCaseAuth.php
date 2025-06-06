<?php

namespace App\Modules\Authentication\Interface;

use Illuminate\Http\RedirectResponse;

interface InterfaceUseCaseAuth
{
    /**
     * prepare method for prepare case business authentication
     */
    public function LoginCase(
        $request,
        array    $ConstRuleLogin,
        array    $ConstMessageLogin,
        //struct login
        string   $messageErrorLoginUsernameOrEmailAndPassword,
        string   $messageErrorLoginVerification,
        string   $currentRoute,
        string   $currentPath,
        string   $errorLoginMessage,
        string   $successLoginMessage,
    ): RedirectResponse;
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
    ): RedirectResponse;
    public function VerificationAccountCase(
        string   $token,
        string   $currentRoute,
        string   $currentPath,
        string   $successVerificationAccountMessage,
        string   $errorVerificationAccountMessage
    );
    public function LogoutCase(
        string   $logoutMessageSuccess,
        string   $logoutMessageError,
        string   $currentRoute,
        string   $currentPath,
        $userSession,
    ): RedirectResponse;
    public function ProfileCase();

    public function UpdateProfileCase();

    public function ForgotPasswordCase(
        //validate
        $request,
        array    $ConstRuleForgotPassword,
        array    $ConstMessageForgotPassword,
        //struct forgot password
        string   $currentRoute,
        string   $currentPath,
        string   $successRegisterForgotPassword,
    ): RedirectResponse;

    public function ResetPasswordCase(
        string   $token,
        string   $errorMessageResetPassword,
    );

    public function ChangePasswordCase(
        //validate
        $request,
        array   $ConstChangePasswordRules,
        array   $ConstChangePasswordMessage,
        //struct change password
        string  $currentRoute,
        string  $currentPath,
        string  $successChangePasswordMessage,
    );
}
