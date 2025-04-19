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
            'email' => 'required|email',
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
            'email.email' => 'harus sesuai dengan format email: @'
        );
    }

    /**
     * @method $ConstLogLogin
     */

    protected function ConstUserLog($message): string
    {
        return "Telah terjadi kesalahan: {$message} ";
    }
}
