<?php

namespace App\Modules\Authentication\Repository;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RepositoryAuth
{
    public function LoginRepository() {}

    public function RegisterRepository(string $name, string $username, string $email, string $password, int $roles_id)
    {
        return DB::insert('INSERT INTO users (name,username,email,password,roles_id,created_at,updated_at) values (?, ?, ?, ?, ?, ?, ?)', [$name, $username, $email, Hash::make($password), $roles_id, now(), now()]);
    }
}
