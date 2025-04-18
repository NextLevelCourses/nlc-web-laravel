<?php

namespace App\Modules\Authentication\Constant;

class ConstantAuth
{
    /**
     * @method $ConstRuleLogin
     */

    public function ConstRuleLogin(): array
    {
        return array(
            'umail' => 'required',
            'password' => 'required',
        );
    }

    /**
     * @method $ConstRuleRegister
     */

    public function ConstRuleRegister(): array
    {
        return array(
            'email' => 'required',
        );
    }

    /**
     * @method $ConstMessageLogin
     */

    public function ConstMessageLogin(): array
    {
        return array(
            'umail.required' => 'The username or email wajib di isi.',
            'password.required' => 'The password wajib di isi.',
        );
    }

    /**
     * @method $ConstMessageRegister
     */

    public function ConstMessageRegister(): array
    {
        return array(
            'email.required' => 'The email wajib di isi.',
        );
    }

    /**
     * @method $ConstLogLogin
     */

    public function ConstLogLogin() {}
}
