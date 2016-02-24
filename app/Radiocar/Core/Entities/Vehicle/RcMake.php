<?php

namespace Radiocar\Core\Entities\Vehicle;

use Illuminate\Database\Eloquent\Model;

class RcMake extends Model
{
    protected $table = 'rc_vehicle_makes';

    protected $fillable = [
        'vehicle_make',
        'active'
    ];

}
