<?php

namespace Radiocar\Core\Entities\Privilege;

use Illuminate\Database\Eloquent\Model;

class RcRole extends Model
{
    protected $table = 'rc_roles';

    protected $fillable = [
        'id',
        'role',
        'active'
    ];

}
