<?php

namespace Radiocar\Core\Entities\Vehicle;

use Illuminate\Database\Eloquent\Model;

class RcClass extends Model
{
    protected $table = 'rc_vehicle_lines';

    protected $fillable = [
        'vehicle_line',
        'active'
    ];

}
