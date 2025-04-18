<?php

namespace App\Modules\Authentication\Constant;

use Illuminate\Http\Request;

abstract class ConstantAuth
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
     * @method $ConstMessageLogin
     */

    public function ConstMessageLogin(): array
    {
        return array(
            'umail.required' => 'The username or email field is required.',
            'password.required' => 'The password field is required.',
        );
    }

    /**
     * @method $ConstLogLogin
     */

    public function ConstLogLogin() {}
}
