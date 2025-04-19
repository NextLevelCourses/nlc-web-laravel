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
     * @method $ConstMessageLog
     */

    protected function ConstMessageLog($message): string
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
}
