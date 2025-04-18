<?php

namespace App\Modules\Authentication\Handler;

use App\Modules\Authentication\Usecase\UsecaseAuth;

class HandlerAuth extends UsecaseAuth
{
    public function login()
    {
        return $this->LoginCase();
    }

    public function register()
    {
        return $this->RegisterCase();
    }

    public function logout()
    {
        return $this->LogoutCase();
    }

    public function profile()
    {
        return $this->ProfileCase();
    }
}
