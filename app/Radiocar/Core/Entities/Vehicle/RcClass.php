<?php

namespace Radiocar\Core\Entities\Vehicle;

use Illuminate\Database\Eloquent\Model;

class RcClass extends Model
{
    protected $table = 'rc_vehicle_classes';

    protected $fillable = [
        'vehicle_class',
        'active'
    ];

}
