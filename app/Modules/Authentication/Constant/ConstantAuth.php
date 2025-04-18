<?php

namespace App\Modules\Authentication\Constant;

use Illuminate\Http\Request;

abstract class ConstantAuth
{
    /**
     * @var $Request
     */

    public const Request = Request::class;

    public function rulesLogin(): array
    {
        return array(
            'umail' => 'required',
            'password' => 'required',
        );
    }

    public function messageLogin(): array
    {
        return array(
            'umail.required' => 'The username or email field is required.',
            'password.required' => 'The password field is required.',
        );
    }

    public function logLogin() {}
}
