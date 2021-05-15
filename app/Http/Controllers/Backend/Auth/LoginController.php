<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Base\BackendController;
use App\Http\Requests\Backend\Auth\LoginRequest;

/**
 * Class LoginController
 * @package App\Http\Controllers\Backend
 */
class LoginController extends BackendController
{
    public function showLoginForm()
    {
        if (backendGuard()->check()) {
            return redirect()->route('backend.dashboard.index');
        }

        return $this->render('backend.auth.login');
    }

    public function login(LoginRequest $request)
    {
        $params = $request->all();
        $data = [
            'email' => data_get($params, 'email'),
            'password' => data_get($params, 'password'),
        ];
        $remember = isset($params['remember']);

        if (backendGuard()->attempt($data, $remember)) {
            return redirect()->route('backend.dashboard.index');
        }

        return redirect()->back()->withErrors(trans('auth.incorrect'));
    }

    public function logout()
    {
        backendGuard()->logout();
        return redirect()->route('backend.login');
    }
}
