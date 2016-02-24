<?php

namespace Radiocar\Core\Entities\Customer;

use Illuminate\Database\Eloquent\Model;

class RcPerson extends Model
{
    protected $table = 'rc_people';

    protected $fillable = [
        'name',
        'last_name',
        'date_of_birth',
        'type_identification',
        'nro_identification',
        'gender',
        'marital_status',
        'profession',
        'company',
        'website_company',
        'notes',
        'active',
    ];

}
