<?php

namespace Radiocar\Core\Entities\Privilege;

use Illuminate\Database\Eloquent\Model;

class RcPrivilege extends Model
{
    protected $table = 'rc_privileges';

    protected $fillable = [
        'privileges',
        'active'
    ];

}
