<?php

namespace App\Modules\Authentication\Constant;

use Illuminate\Support\Str;

class ConstantAuth
{
    /**
     * @method $ConstRuleLogin
     */

    protected function ConstRuleLogin(): array
    {
        return array(
            'umail' => 'required',
            'password' => 'required',
        );
    }

    /**
     * @method $ConstRuleRegister
     */

    protected function ConstRuleRegister(): array
    {
        return array(
            'email' => 'required|email|unique:users,email',
        );
    }

    /**
     * @method $ConstMessageLogin
     */

    protected function ConstMessageLogin(): array
    {
        return array(
            'umail.required' => 'The username or email wajib di isi.',
            'password.required' => 'The password wajib di isi.',
        );
    }

    /**
     * @method $ConstMessageRegister
     */

    protected function ConstMessageRegister(): array
    {
        return array(
            'email.required' => 'The email wajib di isi.',
            'email.email' => 'harus sesuai dengan format email: @',
            'email.unique' => 'email sudah terdaftar harap daftar dengan email lain',
        );
    }

    /**
     * @method $ConstMessageLog
     */

    protected function ConstMessageLog(string $message = 'not message here'): string
    {
        return "Telah terjadi kesalahan: {$message} ";
    }

    /**
     * @method $ConstCurrentRouteLog
     */

    protected function ConstCurrentRouteLog($request)
    {
        return $request->route()->getName();
    }

    /**
     * @method $ConstCurrentPathLog
     */

    protected function ConstCurrentPathLog($request)
    {
        return $request->path();
    }

    /**
     * @var $SUCCESS_REGISTER_MESSAGE
     */
    protected const SUCCESS_REGISTER_MESSAGE = 'Berhasil Registrasi,harap cek email anda untuk mendapatkan link verifikasi account';

    /**
     * @var $FAILED_REGISTER_MESSAGE
     */
    protected const FAILED_REGISTER_MESSAGE = 'Gagal registrasi, maaf ada kesalahan sistem';

    /**
     * @var $SUCCESS_VERIFICATION_ACCOUNT_MESSAGE
     */
    protected const SUCCESS_VERIFICATION_ACCOUNT_MESSAGE = 'Berhasil verifikasi, silahkan login untuk melanjutkan';

    /**
     * @var $FAILED_VERIFICATION_ACCOUNT_MESSAGE
     */
    protected const FAILED_VERIFICATION_ACCOUNT_MESSAGE = 'Gagal verifikasi, token tidak valid atau sudah kadaluarsa';

    /**
     * @var $SUCCESS_FORGOT_PASSWORD_MESSAGE
     */
    protected const SUCCESS_FORGOT_PASSWORD_MESSAGE = 'Berhasil forgot password, silahkan cek email anda untuk mendapatkan link reset password';

    /**
     * @var $FAILED_FORGOT_PASSWORD_MESSAGE
     */
    protected const FAILED_FORGOT_PASSWORD_MESSAGE = 'Gagal forgot password, maaf ada kesalahan sistem';

    /**
     * @method $RandomName
     */
    protected static function RandomName(): string
    {
        return 'NLC-' . Str::random(4);
    }

    /**
     * @method $RandomUsername
     */
    protected static function RandomUsername(): string
    {
        return 'nlc-' . Str::random(4);
    }

    /**
     * @method $RandomPassword
     */
    protected static function RandomPassword(): string
    {
        return Str::random(10);
    }

    /**
     * @var int $roleID
     */
    protected int $roleID = 1; // roles id default student

    /**
     * @method $TokenVerification
     */

    protected static function TokenVerification(): string
    {
        return Str::random(20);
    }
}
