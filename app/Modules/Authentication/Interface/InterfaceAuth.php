<?php

namespace App\Modules\Authentication\Interface;

interface InterfaceAuth
{
    /**
     * prepare method for prepare case business authentication
     */
    public function LoginCase(
        $request,
        $ConstRuleLogin,
        $ConstMessageLogin
    );
    public function RegisterCase(
        $request,
        $ConstRuleRegister,
        $ConstMessageRegister,
        $currentRoute,
        $currentPath,
        $successRegisterMessage,
        $errorRegisterMessage,
        //params for services need registered
        string $randomName,
        string $randomUsername,
        string $randomPassword,
        int $rolesId,
        string $tokenVerification,
        string $urlVerification,
    );
    public function VerificationAccountCase(
        $token,
        $currentRoute,
        $currentPath,
        $successVerificationAccountMessage,
        $errorVerificationAccountMessage
    );
    public function LogoutCase();
    public function ProfileCase();
}
