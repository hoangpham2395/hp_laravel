<?php

namespace App\Http\Requests\Backend\Auth;

use App\Http\Requests\BaseRequest;

/**
 * Class LoginRequest
 * @package App\Http\Requests\Backend
 */
class LoginRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
        ];
    }
}
