<?php

namespace Radiocar\Core\Entities\Work;

use Illuminate\Database\Eloquent\Model;

class RcWorkType extends Model
{
    protected $table = 'rc_work_types';

    protected $fillable = [
        'type_work',
        'active',
    ];
}
