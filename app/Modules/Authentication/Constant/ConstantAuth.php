<?php

namespace App\Modules\Authentication\Constant;

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
     * @var $success_register
     */
    protected const SUCCESS_REGISTER = 'Berhasil Registrasi,harap cek email anda untuk mendapatkan link verifikasi account';
}
