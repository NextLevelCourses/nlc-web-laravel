<?php

namespace App\Modules\Authentication\Domain;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DomainAuth
{
    public function DomainLogErrorInsert($message, $route, $path): void
    {
        DB::insert('insert into log_errors (message,route,path,created_at,updated_at) values (?, ?, ?, ?, ?)', [$message, $route, $path, now(), now()]);
    }

    public function DomainUserRegister($name, $username, $email, $password, $roles_id, $token_verification): void
    {
        DB::insert('INSERT INTO users (name,username,email,password,roles_id,remember_token,created_at,updated_at) values (?, ?, ?, ?, ?, ?, ?, ?)', [$name, $username, $email, Hash::make($password), $roles_id, $token_verification, now(), now()]);
    }
}
