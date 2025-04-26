<?php

namespace App\Modules\Authentication\Services;

use Illuminate\Support\Str;
use Illuminate\Http\RedirectResponse;
use App\Modules\Authentication\Repository\RepositoryAuth;

class ServicesAuth extends RepositoryAuth
{
    /**
     * @method LoginServices
     * excec bisnis logic login
     * @return RedirectResponse
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

        if (!$this->_SetAccountStatusByEmailOrUsernameRepository($request->umail)) {
            return redirect()->route('landing.Authentication')->with('error', $messageErrorLoginVerification);
        }

        $this->GenerateSessionLoginRepository($this->SetRequestLoginByUsernameOrEmailAndPasswordRepository($request));
        return $this->RedirectLoginSuccessRepository($messageSuccessLogin);
    }

    /**
     * @method RegisterServices
     *  excec bisnis logic register
     *  @return void
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
     * @return void
     */

    protected function VerificationAccountServices(string $token): void
    {
        $this->VerificationAccountRepository($token);
        //validate email by tokens
        $token = $this->ValidateEmailByTokensRepository($token);
        //delete token verification by email
        $this->DeleteTokensVerifyAcountRepository($token[0]->email);
    }

    /**
     * @method LogoutService
     *  excec bisnis logic loggout user session
     * @return void
     */
    protected function LogoutService(): void
    {
        $this->UserLoggoutSessionRepository();
    }

    /**
     * @method ForgotPasswordServices
     *  excec bisnis logic forgot password users by email
     * @return void
     */
    protected function ForgotPasswordServices(string $email): void
    {
        $token  = Str::random(20);
        $url    = config('app.url') . '/reset/' . $token . '/password';
        if (!empty($email)) {
            $this->InsertForgotPasswordRepository($email, $url, $token, now(), now());
            $this->SendEmailForgotPasswordRepository($email, $url);
        }
    }

    /**
     * @method ResetPasswordServices
     */
    protected function ResetPasswordServices(
        string  $token,
        string  $errorMessageResetPassword,
    ) {
        $token = $this->ValidateTokensResetPasswordRepository($token);
        if (empty($token)) {
            return redirect()->route('landing.Authentication')->with('error', $errorMessageResetPassword);
        };
        return view('landing.module.ResetPassword', ['email' => $token[0]->email]);
    }
}
