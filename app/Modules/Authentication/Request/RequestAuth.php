<?php

namespace App\Modules\Authentication\Request;

use Illuminate\Http\Request;

class RequestAuth
{
    public function RequestLogin(Request $request, array $LoginRules, array $LoginMessage)
    {
        return $request->validate($LoginRules, $LoginMessage);
    }
    public function RequestRegister(Request $request, array $RegisterRules, array $RegisterMessage)
    {
        return $request->validate($RegisterRules, $RegisterMessage);
    }

    public function RequestForgot(Request $request, array $ForgotRules, array $ForgotMessage)
    {
        return $request->validate($ForgotRules, $ForgotMessage);
    }

    public function RequestChangePassword(Request $request, array $ChangePasswordRules, array $ChangePasswordMessage)
    {
        return $request->validate($ChangePasswordRules, $ChangePasswordMessage);
    }
}
