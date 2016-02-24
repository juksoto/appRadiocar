<?php

namespace Radiocar\Core\Entities\Work;

use Illuminate\Database\Eloquent\Model;

class RcWork extends Model
{
    protected $table = 'rc_works';

    protected $fillable = [
        'vehicle_class',
        'number_identification',
        'title',
        'description_short',
        'date',
        'observations',
        'notes',
        'url_pdf',
        'vehicle_id',
        'work_descriptions_id',
        'work_types_id',
        'active',
    ];
}
