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
        string $messageErrorLoginUsernameOrEmail,
        string $messageErrorLoginPassword,
        string $messageErrorLoginVerification,
        string $messageSuccessLogin,
    ): RedirectResponse {

        $userEmailOrPassword = $this->ValidateLoginByExistingEmailOrUsernameRepository($request->umail);
        if ($userEmailOrPassword) {

            $userPassword = $this->ValidatePasswordByHashRepository($request->password, $userEmailOrPassword[0]->password);
            if (!$userPassword) {
                return redirect()->route('landing.Authentication')->with('error', $messageErrorLoginPassword);
            }
            //di izinkan login jika account nya verif
            if (!$userEmailOrPassword[0]->status) {
                return redirect()->route('landing.Authentication')->with('error', $messageErrorLoginVerification);
            }

            $this->GenerateSessionAuthByUserIDRepository($userEmailOrPassword[0]->id);
            return redirect()->route('Dashboard.Home')->with('success', $messageSuccessLogin);
        }

        return redirect()->route('landing.Authentication')->with('error', $messageErrorLoginUsernameOrEmail);
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
