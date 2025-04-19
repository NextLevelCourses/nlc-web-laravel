<?php

namespace App\Modules\Authentication\Interface;

interface InterfaceAuth
{
    /**
     * prepare method for prepare case business authentication
     */
    public function LoginCase($ConstRuleLogin, $ConstMessageLogin);
    public function RegisterCase($ConstRuleRegister, $ConstMessageRegister);
    public function LogoutCase();
    public function ProfileCase();
}
