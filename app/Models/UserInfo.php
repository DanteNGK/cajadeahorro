<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users_info';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'clave';
}
