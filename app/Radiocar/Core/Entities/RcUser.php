<?php

namespace Radiocar\Core\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;

class RcUser extends Authenticatable
{
    protected $table = 'rc_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password','role_id', 'active' ,
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
