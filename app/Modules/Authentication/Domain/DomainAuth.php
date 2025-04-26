<?php

namespace App\Modules\Authentication\Domain;

use App\Modules\Authentication\Interface\InterfaceDomainAuth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DomainAuth implements InterfaceDomainAuth
{
    /**
     * @method DomainLogErrorInsert
     *  transaction data with log error to table log_errors
     */

    public function DomainLogInsert(
        string $message,
        string $route,
        string $path,
        string $type,
    ): void {
        DB::insert('insert into log (message,route,path,type,created_at,updated_at) values (?, ?, ?, ?, ?, ?)', [$message, $route, $path, $type, now(), now()]);
    }

    /**
     * @method DomainLogErrorInsert
     *  transaction data with user register to table users
     */

    public function DomainUserRegister(
        string $name,
        string $username,
        string $email,
        string $password,
        string $roles_id,
        string $token_verification
    ): void {
        DB::insert('INSERT INTO users (name,username,email,password,roles_id,remember_token,created_at,updated_at) values (?, ?, ?, ?, ?, ?, ?, ?)', [$name, $username, $email, Hash::make($password), $roles_id, $token_verification, now(), now()]);
    }

    /**
     * @method DomainVerifyAccountByTokens
     *  transaction data with verification account to table users
     */

    public function DomainVerifyAccountByTokens(string $token): void
    {
        DB::update("UPDATE users SET status = ? WHERE remember_token = ?", [true, $token]);
    }

    /**
     * @method DomainDeleteTokensVerification
     *  transaction data with delete token verification account to table users
     */
    public function DomainDeleteTokensVerification(string $email): void
    {
        DB::update('UPDATE users SET remember_token = ? WHERE email = ?', [null, $email]);
    }

    /**
     * @method DomainVerifyEmailByTokens
     *  transaction data with validate token by email
     * @return array
     */

    public function DomainValidateEmailByTokens(string $token): array
    {
        return DB::select("SELECT * FROM users WHERE remember_token = ?", [$token]);
    }

    /**
     * @method DomainValidateAccountStatus
     *  transaction data with validate token by email
     * @return array
     */

    public function DomainValidateAccountStatus(string $umail): array
    {
        return DB::select("SELECT * FROM users WHERE email = ? OR username = ?", [$umail, $umail]);
    }

    /**
     * @method DomainInsertForgotPassword
     *  transaction with insert forgot password
     * @return array
     */
    public function DomainInsertForgotPassword(
        string $email,
        string $token,
        string $url,
        string $created_at,
        string $updated_at
    ): void {
        DB::insert('INSERT INTO password_reset_tokens (email,token,url,created_at,updated_at) values (?, ?, ?, ?, ?)', [$email, $token, $url, $created_at, $updated_at]);
    }

    /**
     * @method DomainValidateTokenResetPassword
     *  transaction with validate reset password with token
     * @return array
     */
    public function DomainValidateTokenResetPassword(string $token): array
    {
        return DB::select("SELECT * FROM password_reset_tokens WHERE token = ?", [$token]);
    }
}
