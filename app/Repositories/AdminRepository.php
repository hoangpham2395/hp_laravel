<?php

namespace App\Repositories;

use App\Models\Entities\Admin;
use App\Repositories\Base\BaseRepository;

/**
 * Class AdminRepository
 * @package App\Repositories
 */
class AdminRepository extends BaseRepository
{
    /**
     * @return mixed
     */
    public function model()
    {
        return Admin::class;
    }
}
