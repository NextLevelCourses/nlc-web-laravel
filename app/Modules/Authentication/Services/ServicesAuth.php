<?php

namespace App\Modules\Authentication\Services;

use Illuminate\Support\Str;
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
    ): RedirectResponse {

        $userEmail = $this->ValidateLoginByExistingEmailRepository($request->umail);
        if ($userEmail) {

            $userPassword = $this->ValidatePasswordByHashRepository($request->password, $userEmail[0]->password);
            if (!$userPassword) {
                return redirect()->route('landing.Authentication')->with('error', $messageErrorLoginPassword);
            }
            //di izinkan login jika account nya verif
            $userAcccountStatusByEmail = $this->ValidateLoginStatusVerifyAccountRepositoryByEmail($request->umail, $userEmail[0]->status);
            if ($userAcccountStatusByEmail) {
            } else {
                return redirect()->route('landing.Authentication')->with('error', $messageErrorLoginVerification);
            }
        }

        $userName = $this->ValidateLoginByExistingUsernameRepository($request->umail);
        if ($userName) {

            $userPassword = $this->ValidatePasswordByHashRepository($request->password, $userName[0]->password);
            if (!$userPassword) {
                return redirect()->route('landing.Authentication')->with('error', $messageErrorLoginPassword);
            }
            //di izinkan login jika account nya verif
            $userAcccountStatusByUsername = $this->ValidateLoginStatusVerifyAccountRepositoryByEmail($request->umail, $userName[0]->status);
            if ($userAcccountStatusByUsername) {
            } else {
                return redirect()->route('landing.Authentication')->with('error', $messageErrorLoginVerification);
            }
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
