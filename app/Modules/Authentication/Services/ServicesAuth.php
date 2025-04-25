<?php

namespace App\Modules\Authentication\Services;

use App\Modules\Authentication\Repository\RepositoryAuth;
use Illuminate\Http\RedirectResponse;

class ServicesAuth extends RepositoryAuth
{
    /**
     * @method LoginServices
     * excec bisnis logic login
     */

    protected function LoginServices(
        $request,
        string $messageErrorLoginUsernameOrEmailAndPassword,
        string $messageErrorLoginVerification,
        string $messageSuccessLogin,
    ): RedirectResponse {

        if (!$this->ValidateLoginByExistingEmailOrUsernameRepository($this->SetRequestLoginByUsernameOrEmailAndPasswordRepository($request))) {
            return redirect()->route('landing.Authentication')->with('error', $messageErrorLoginUsernameOrEmailAndPassword);
        }

        $this->GenerateSessionLoginRepository($this->SetRequestLoginByUsernameOrEmailAndPasswordRepository($request));
        return $this->RedirectLoginSuccessRepository($messageSuccessLogin);
    }

    /**
     * @method RegisterServices
     *  excec bisnis logic register
     */

    protected function RegisterServices(
        string  $randomName,
        string  $randomUsername,
        string  $email,
        string  $randomPassword,
        int     $rolesId,
        string  $tokenVerification,
        string  $dateRegistered,
        string  $ip,
        string  $urlVerification,
    ): void {
        $this->RegisterRepository(
            $randomName,
            $randomUsername,
            $email,
            $randomPassword,
            $rolesId,
            $tokenVerification,
            $dateRegistered,
            $ip,
            $urlVerification
        );
    }

    /**
     * @method VerificationAccountServices
     *  excec bisnis logic verification account
     */

    protected function VerificationAccountServices(string $token): void
    {
        $this->VerificationAccountRepository($token);
        //validate email by tokens
        $token = $this->ValidateEmailByTokensRepository($token);
        //delete token verification by email
        $this->DeleteTokensVerifyAcountRepository($token[0]->email);
    }
}
