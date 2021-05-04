<?php

namespace App\Models\Entities;

use App\Models\Base\BaseAuth;
use App\Models\Presenters\PAdmin;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Admin
 * @package App\Models\Entities
 */
class Admin extends BaseAuth
{
    use SoftDeletes, PAdmin;

    protected $table = 'admins';
    protected $primaryKey = 'id';
    protected $fillable = [];
    protected $hidden = ['password'];

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

    /**
     * @param $value
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
