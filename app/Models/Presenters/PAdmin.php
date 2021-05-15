<?php

namespace App\Models\Presenters;

/**
 * Trait PAdmin
 * @package App\Models\Presenters
 */
trait PAdmin
{
    public function isSuperAdmin()
    {
        return $this->role_type == getConstant('ADMIN_ROLE_TYPE.SUPER_ADMIN');
    }

    public function isAdmin()
    {
        return $this->role_type == getConstant('ADMIN_ROLE_TYPE.ADMIN');
    }
}
