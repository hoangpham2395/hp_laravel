<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseModel
 * @package App\Models\Base
 */
class BaseModel extends Model
{
    use BasePresenter;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    public $timestamps = true;
}