<?php

namespace App\Modules\Authentication\Interface;

interface InterfaceAuth
{
    /**
     * prepare method for prepare case business authentication
     */
    public function LoginCase($request, $ConstRuleLogin, $ConstMessageLogin);
    public function RegisterCase($request, $ConstRuleRegister, $ConstMessageRegister);
    public function LogoutCase();
    public function ProfileCase();
}
