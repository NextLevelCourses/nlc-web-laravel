<?php

namespace App\Modules\Authentication\Interface;

interface InterfaceAuth
{
    /**
     * prepare method for prepare case business authentication
     */
    public function LoginCase();
    public function RegisterCase();
    public function LogoutCase();
    public function ProfileCase();
}
