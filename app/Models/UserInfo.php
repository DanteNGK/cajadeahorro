<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable = [
    	'name',
    	'last_name',
    	'middle_name',
    	'street',
    	'neighborhood',
    	'postal_code',
    	'municipality',
    	'id',
    	'cellphone'
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users_info';
}
