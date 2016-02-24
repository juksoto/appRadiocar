<?php

namespace Radiocar\Core\Entities\Work;

use Illuminate\Database\Eloquent\Model;

class RcWorkDescription extends Model
{
    protected $table = 'rc_work_descriptions';

    protected $fillable = [
        'description',
        'active',
    ];
}
