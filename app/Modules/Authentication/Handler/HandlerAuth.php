<?php

namespace App\Modules\Authentication\Handler;

use App\Modules\Authentication\Constant\ConstantAuth;
use App\Modules\Authentication\Usecase\UsecaseAuth;
use Illuminate\Http\Request;

class HandlerAuth extends ConstantAuth
{
    public function __construct(
        private UsecaseAuth $usecaseAuth,
        private Request $request,
    ) {}
    /**
     * @method login
     * handle usecase login
     */
    public function login()
    {
        return $this->usecaseAuth->LoginCase(
            $this->request,
            $this->ConstRuleLogin(),
            $this->ConstMessageLogin(),
            //struct login
            $this->MESSAGE_ERROR_LOGIN_USERNAME_OR_EMAIL_AND_PASSWORD,
            $this->MESSAGE_ERROR_LOGIN_VERIFICATION,
            $this->ConstCurrentRouteLog($this->request),
            $this->ConstCurrentPathLog($this->request),
            $this->FAILED_LOGIN_MESSAGE,
            $this->SUCCESS_LOGIN_MESSAGE,
        );
    }

    /**
     * @method register
     * handle usecase register
     */
    public function register()
    {
        return $this->usecaseAuth->RegisterCase(
            $this->request,
            $this->ConstRuleRegister(),
            $this->ConstMessageRegister(),
            $this->ConstCurrentRouteLog($this->request),
            $this->ConstCurrentPathLog($this->request),
            $this->SUCCESS_REGISTER_MESSAGE,
            $this->FAILED_REGISTER_MESSAGE,
            //params for usecase need registration
            $this->RandomName(),
            $this->RandomUsername(),
            $this->RandomPassword(),
            $this->roleID,
            $this->TokenVerification(),
            $this->UrlVerification(),
        );
    }
    /**
     * @method verification
     * handle usecase verification
     */
    public function verification($token)
    {
        return $this->usecaseAuth->VerificationAccountCase(
            $token,
            $this->ConstCurrentRouteLog($this->request),
            $this->ConstCurrentPathLog($this->request),
            $this->SUCCESS_VERIFICATION_ACCOUNT_MESSAGE,
            $this->FAILED_VERIFICATION_ACCOUNT_MESSAGE,
        );
    }
    /**
     * @method logout
     * handle usecase logout
     */
    public function logout()
    {
        return $this->usecaseAuth->LogoutCase(
            $this->MESSAGE_LOGOUT_SUCCESS,
            $this->MESSAGE_LOGOUT_ERROR,
            $this->ConstCurrentRouteLog($this->request),
            $this->ConstCurrentPathLog($this->request),
            $this->AuthUsersBySessions(),
        );
    }
    /**
     * @method profile
     * handle usecase profile
     */
    public function profile()
    {
        return $this->usecaseAuth->ProfileCase();
    }


    /**
     * @method updateProfile
     * handle usecase update profile    
     */
    public function updateProfile()
    {
        return $this->usecaseAuth->UpdateProfileCase();
    }

    /**
     * @method forgotPassword
     * handle usecase forgot password
     */
    public function forgotPassword()
    {
        return $this->usecaseAuth->ForgotPasswordCase(
            $this->request,
            $this->ConstRuleForgotPassword(),
            $this->ConstMessageForgotPassword(),
            $this->ConstCurrentRouteLog($this->request),
            $this->ConstCurrentPathLog($this->request),
            $this->SUCCESS_FORGOT_PASSWORD_MESSAGE,
        );
    }

    /**
     * @method resetPassword
     * handle usecase reset password
     */
    public function resetPassword($token)
    {
        return $this->usecaseAuth->ResetPasswordCase(
            $token,
            $this->MESSAGE_RESET_PASSWORD_FAILED,
        );
    }

    /**
     * @method changePassword
     * handle usecase change password
     */

    public function changePassword()
    {
        return $this->usecaseAuth->ChangePasswordCase(
            $this->request,
            $this->ConstChangePasswordRules(),
            $this->ConstChangePasswordMessage(),
            $this->ConstCurrentRouteLog($this->request),
            $this->ConstCurrentPathLog($this->request),
            $this->MESSAGE_SUCCESS_CHANGE_PASSWORD,
        );
    }
}
