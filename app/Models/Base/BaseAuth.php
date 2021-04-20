<?php

namespace App\Models\Base;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Notifications\Notifiable;

/**
 * Class BaseAuth
 * @package App\Models\Base
 */
class BaseAuth extends BaseModel implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword, MustVerifyEmail, HasFactory, Notifiable;

    /**
     * Login not use remember_token
     * @param array $options
     * @return bool
     */
    public function save(array $options = array())
    {
        if (isset($this->remember_token)) {
            unset($this->remember_token);
        }
        return parent::save($options);
    }
}
