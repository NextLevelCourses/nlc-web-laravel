<?php

namespace App\Modules\Authentication\Repository;

use App\Modules\Authentication\Domain\DomainAuth;

class RepositoryAuth extends DomainAuth
{
    public function LoginRepository() {}

    public function RegisterRepository(string $name, string $username, string $email, string $password, int $roles_id, string $token_verification): void
    {
        $this->DomainUserRegister(
            $name,
            $username,
            $email,
            $password,
            $roles_id,
            $token_verification,
        );
    }
}
