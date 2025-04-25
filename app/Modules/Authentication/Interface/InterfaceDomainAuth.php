<?php

namespace App\Modules\Authentication\Interface;

interface InterfaceDomainAuth
{
    /**
     * prepare method for prepare domain business authentication
     */
    public function DomainLogInsert(
        string $message,
        string $route,
        string $path,
        string $type,
    ): void;

    public function DomainUserRegister(
        string $name,
        string $username,
        string $email,
        string $password,
        string $roles_id,
        string $token_verification
    ): void;

    public function DomainVerifyAccountByTokens(string $token): void;

    public function DomainDeleteTokensVerification(string $email): void;

    public function DomainValidateEmailByTokens(string $token): array;

    public function DomainValidateLoginByExistingEmailOrUsername(string $umail): array;
}
