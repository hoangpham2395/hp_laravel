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

    protected $table = 'admin';
    protected $primaryKey = 'id';
    protected $fillable = [];
    protected $hidden = ['password'];

    /**
     * @param $value
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
