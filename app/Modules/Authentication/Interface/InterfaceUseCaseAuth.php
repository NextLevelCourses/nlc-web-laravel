<?php

namespace App\Modules\Authentication\Interface;

interface InterfaceUseCaseAuth
{
    /**
     * prepare method for prepare case business authentication
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
    );
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
    );
    public function VerificationAccountCase(
        string   $token,
        string   $currentRoute,
        string   $currentPath,
        string   $successVerificationAccountMessage,
        string   $errorVerificationAccountMessage
    );
    public function LogoutCase();
    public function ProfileCase();
}
