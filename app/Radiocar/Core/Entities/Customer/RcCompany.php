<?php

namespace Radiocar\Core\Entities\Customer;

use Illuminate\Database\Eloquent\Model;

class RcCompany extends Model
{
    protected $table = 'rc_companies';

    protected $fillable = [
          'id',
           'name',
           'website',
           'nro_identification',
           'notes',
           'active',
    ];

}
