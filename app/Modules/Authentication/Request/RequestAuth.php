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
}
