<?php

namespace App\Http\Requests\Backend\Admin;

use App\Http\Requests\BaseRequest;

class StoreRequest extends BaseRequest
{
    protected $table = 'admins';

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function rules()
    {
        return [
            'name' => 'required|max:128',
            'email' => 'required|email|unique:' . $this->table . '|max:256',
            'password' => 'required',
            'confirm_password' => 'required_with:password|same:password',
            'tel' => 'nullable|max:12',
            'avatar' => 'nullable|mimes:jpg,png,jpeg',
            'role_type' => 'required|in:' . implode(',', array_values(getConstant('ADMIN_ROLE_TYPE', []))),
        ];
    }
}
