<?php

namespace App\Modules\Authentication\Constant;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ConstantAuth
{
    /**
     * @method ConstRuleLogin
     * @return array
     */

    protected function ConstRuleLogin(): array
    {
        return array(
            'umail' => 'required',
            'password' => 'required',
        );
    }

    /**
     * @method ConstRuleRegister
     * @return array
     */

    protected function ConstRuleRegister(): array
    {
        return array(
            'email' => 'required|email|unique:users,email',
        );
    }

    /**
     * @method ConstMessageLogin
     * @return array
     */

    protected function ConstMessageLogin(): array
    {
        return array(
            'umail.required' => 'Username or email wajib di isi.',
            'password.required' => 'Password wajib di isi.',
        );
    }

    /**
     * @method ConstMessageRegister
     * @return array
     */

    protected function ConstMessageRegister(): array
    {
        return array(
            'email.required' => 'Email wajib di isi.',
            'email.email' => 'Harus sesuai dengan format email: @',
            'email.unique' => 'Email sudah terdaftar harap daftar dengan email lain',
        );
    }

    /**
     * @method ConstRuleForgotPassword
     * @return array
     */

    protected function ConstRuleForgotPassword(): array
    {
        return array(
            'reset_email' => 'required|email|exists:users,email',
        );
    }

    /**
     * @method ConstMessageForgotPassword
     * @return array
     */
    protected function ConstMessageForgotPassword(): array
    {
        return array(
            'reset_email.required' => 'Email wajib di isi.',
            'reset_email.email' => 'Harus sesuai dengan format email: @',
            'reset_email.exists' => 'Email tidak terdaftar harap masukan email lain',
        );
    }

    /**
     * @method ConstChangePasswordMessage
     * @return array
     */

    protected function ConstChangePasswordMessage(): array
    {
        return array(
            'min' => ':attribute Password minimal 8 karakter',
            'regex' => ':attribute Password harus terdiri dari huruf besar, kecil, angka dan spesical character',
            'change_new_password.required' => 'Password baru wajib di isi.',
            'change_confirm_password.required' => 'Konfirmasi Password wajib di isi.',
            'change_confirm_password.same' => 'Password tidak sama.',
        );
    }

    /**
     * @method ConstChangePasswordRules
     * @return array
     */
    protected function ConstChangePasswordRules(): array
    {
        return array(
            'change_new_password' => 'required|string|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            'change_confirm_password' => 'required|string|min:8|same:change_new_password',
        );
    }

    /**
     * @method ConstMessageLog
     * @return string
     */

    protected function ConstMessageLog(string $message = 'not message here'): string
    {
        return "Telah terjadi kesalahan: {$message} ";
    }

    /**
     * @method ConstCurrentRouteLog
     * @return string
     */

    protected function ConstCurrentRouteLog($request): string
    {
        return $request->route()->getName();
    }

    /**
     * @method ConstCurrentPathLog
     * @return string
     */

    protected function ConstCurrentPathLog($request): string
    {
        return $request->path();
    }

    /**
     * @var string $SUCCESS_REGISTER_MESSAGE
     * @return string
     */
    protected string $SUCCESS_REGISTER_MESSAGE = 'Berhasil Registrasi,harap cek email anda untuk mendapatkan link verifikasi account';

    /**
     * @var string $SUCCESS_LOGIN_MESSAGE
     * @return string
     */
    protected string $SUCCESS_LOGIN_MESSAGE = 'Berhasil Login,silahkan gunakan fitur dengan sebijak mungkin';

    /**
     * @var string $FAILED_REGISTER_MESSAGE
     * @return string
     */
    protected string $FAILED_REGISTER_MESSAGE = 'Gagal registrasi, maaf ada kesalahan sistem';

    /**
     * @var string $FAILED_LOGIN_MESSAGE
     * @return string
     */
    protected string $FAILED_LOGIN_MESSAGE = 'Gagal registrasi, maaf ada kesalahan sistem';

    /**
     * @var string $SUCCESS_VERIFICATION_ACCOUNT_MESSAGE
     * @return string
     */
    protected string $SUCCESS_VERIFICATION_ACCOUNT_MESSAGE = 'Berhasil verifikasi, silahkan login untuk melanjutkan';

    /**
     * @var string $FAILED_VERIFICATION_ACCOUNT_MESSAGE
     * @return string
     */
    protected string $FAILED_VERIFICATION_ACCOUNT_MESSAGE = 'Gagal verifikasi, token tidak valid atau sudah kadaluarsa';

    /**
     * @var string $SUCCESS_FORGOT_PASSWORD_MESSAGE
     * @return string
     */
    protected string $SUCCESS_FORGOT_PASSWORD_MESSAGE = 'Berhasil forgot password, silahkan cek email anda untuk mendapatkan link reset password';

    /**
     * @var string $FAILED_FORGOT_PASSWORD_MESSAGE
     * @return string
     */
    protected string $FAILED_FORGOT_PASSWORD_MESSAGE = 'Gagal forgot password, maaf ada kesalahan sistem';

    /**
     * @var string $MESSAGE_ERROR_LOGIN_USERNAME_OR_EMAIL
     * @return string
     */

    protected string $MESSAGE_ERROR_LOGIN_USERNAME_OR_EMAIL_AND_PASSWORD = 'Gagal login, email atau username dan password salah';

    /**
     * @var string $MESSAGE_ERROR_LOGIN_PASSWORD
     * @return string
     */

    protected string $MESSAGE_ERROR_LOGIN_PASSWORD = 'Gagal Login, password anda salah';

    /**
     * @var string $MESSAGE_ERROR_LOGIN_VERIFICATION
     * @return string
     */

    protected string $MESSAGE_ERROR_LOGIN_VERIFICATION = 'Gagal Login, akun anda belum di verifikasi harap lakukan verifikasi';

    /**
     * @var string $MESSAGE_LOGOUT_SUCCESS
     * @return string
     */

    protected string $MESSAGE_LOGOUT_SUCCESS = 'Berhasil Logout, silahkan login kembali jika ingin masuk';

    /**
     * @var string $MESSAGE_LOGOUT_ERROR
     * @return string
     */

    protected string $MESSAGE_LOGOUT_ERROR = 'Gagal Logout, silahkan dicoba kembali';

    /**
     * @var string $MESSAGE_FORGOT_PASSWORD_SUCCESS
     * @return string
     */

    protected string $MESSAGE_FORGOT_PASSWORD_SUCCESS = 'Berhasil Forgot, silahkan cek email anda untuk mendapatkan link reset password';

    /**
     * @var string $MESSAGE_RESET_PASSWORD_SUCCESS
     * @return string
     */

    protected string $MESSAGE_RESET_PASSWORD_SUCCESS = 'Berhasil Reset Password, silahkan login menggunakan password baru anda';

    /**
     * @var string $MESSAGE_RESET_PASSWORD_FAILED
     * @return string
     */

    protected string $MESSAGE_RESET_PASSWORD_FAILED = 'Gagal Reset Password, token tidak valid atau sudah kadaluarsa';

    /**
     * @var string $MESSAGE_SUCCESS_CHANGE_PASSWORD
     * @return string
     */

    protected string $MESSAGE_SUCCESS_CHANGE_PASSWORD = 'Berhasil Ubah Password, silahkan login menggunakan password baru anda';

    /**
     * @method RandomName
     * @return string
     */
    protected static function RandomName(): string
    {
        return 'NLC-' . Str::random(4);
    }

    /**
     * @method RandomUsername
     * @return string
     */
    protected static function RandomUsername(): string
    {
        return 'nlc-' . Str::random(4);
    }

    /**
     * @method RandomPassword
     * @return string
     */
    protected static function RandomPassword(): string
    {
        return Str::random(10);
    }

    /**
     * @var int $roleID
     * @return int
     */
    protected int $roleID = 1; // roles id default student

    /**
     * @method TokenVerification
     * @return string
     */

    protected static function TokenVerification(): string
    {
        return Str::random(20);
    }

    /**
     * @method UrlVerification
     * @return string
     */
    protected static function UrlVerification(): string
    {
        return config('app.url') . '/verification/account';
    }

    /**
     * @method AuthUsersBySessions
     */
    protected function AuthUsersBySessions()
    {
        return Auth::guard('user')->user();
    }
}
