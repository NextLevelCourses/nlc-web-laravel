<?php

namespace App\Modules\Authentication\Repository;

use Illuminate\Support\Facades\Mail;
use App\Modules\Authentication\Mail\MailAuth;
use App\Modules\Authentication\Domain\DomainAuth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RepositoryAuth extends DomainAuth
{
    protected function LoginRepository() {}

    /**
     * @method RegisterRepository
     *  manage business logic user register then verification email repository
     */

    protected function RegisterRepository(
        string  $name,
        string  $username,
        string  $email,
        string  $password,
        int     $roles_id,
        string  $token_verification,
        string  $date_registered,
        string  $ip,
        string  $url_verification,
    ): void {
        $this->DomainUserRegister(
            $name,
            $username,
            $email,
            $password,
            $roles_id,
            $token_verification,
        );
        $url_verification = $url_verification . '/' . $token_verification;
        $this->SendMailUserVerificationRegister(
            $email,
            $username,
            $password,
            $date_registered,
            $ip,
            $url_verification
        );
    }

    /**
     * @method VerificationAccountRepository
     *  manage business logic send mail verification account
     * @return void
     */
    protected function VerificationAccountRepository(string $token): void
    {
        $this->DomainVerifyAccountByTokens($token);
    }

    /**
     * @method DeleteTokensVerifyAcountRepository
     *  manage business logic delete token after verify
     * @return void
     */
    protected function DeleteTokensVerifyAcountRepository(string $email): void
    {
        $this->DomainDeleteTokensVerification($email);
    }

    /**
     * @method ValidateEmailByTokensRepository
     *  manage business logic validate email existing
     * @return array
     */
    protected function ValidateEmailByTokensRepository(string $token): array
    {
        return $this->DomainValidateEmailByTokens($token);
    }

    /**
     * @method SendMailUserVerificationRegister
     *  send mail verification register user
     * @return void
     */
    private static function SendMailUserVerificationRegister(
        string $email,
        string $username,
        string $password,
        string $date_registered,
        string $ip,
        string $url_verification,
    ): void {
        Mail::to($email)->send(new MailAuth($username, $password, $date_registered, $ip, $email, $url_verification));
    }

    /**
     * @method ValidatePasswordByHash
     *  validate password by hash
     * @return bool
     */
    protected static function ValidatePasswordByHashRepository($passwordReq, $passwordHash): bool
    {
        return !Hash::check($passwordReq, $passwordHash) ? false : true;
    }

    /**
     * @method ValidateLoginByExistingEmailOrUsernameRepository
     *  validate login by existing email or username
     * @return bool
     */

    protected function ValidateLoginByExistingEmailOrUsernameRepository($credential): bool
    {
        return Auth::attempt($credential) ? true : false;
    }

    /**
     * @method SetRequestLoginByUsernameOrEmailRepository
     *  validate login by existing email or username
     * @return array
     */

    protected function SetRequestLoginByUsernameOrEmailAndPasswordRepository($request): array
    {
        return filter_var($request->umail, FILTER_VALIDATE_EMAIL) ?
            ['email' => $request->umail, 'password' => $request->password] :
            ['username' => $request->umail, 'password' => $request->password];
    }

    /**
     * @method GenerateSessionLoginRepository
     */

    protected function GenerateSessionLoginRepository($credential)
    {
        $login = Auth::getProvider()->retrieveByCredentials($credential);
        Auth::guard('user')->login($login);
        return Auth::guard('user')->user();
    }

    /**
     * @method RedirectLoginSuccessRepository
     * @return RedirectResponse
     */

    protected function RedirectLoginSuccessRepository($messageSuccessLogin): RedirectResponse
    {
        return redirect()->intended('/Home')->with('success', $messageSuccessLogin);
    }
}
